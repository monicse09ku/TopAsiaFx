<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$brokers_data = Yii::app()->db->createCommand()
						    ->select()
						    ->from('tbl_brokers')
						    ->order('score DESC')
						    ->queryAll();

		$raw_banner_data = Yii::app()->db->createCommand()
						    ->select()
						    ->from('banner_settings')
						    ->queryAll();

		foreach ($raw_banner_data as $key => $value) {
			$banner_data[$value['position']] = $value;
		}

		$faqs = Yii::app()->db->createCommand()
						    ->select()
						    ->from('faqs')
						    ->where('page=:page', array(':page'=>'home'))
						    ->queryAll();

		$posts_sql = "SELECT * FROM posts WHERE status='active' ORDER BY create_date DESC LIMIT 12";

		$posts = Yii::app()->db->createCommand($posts_sql)->queryAll();

		Yii::app()->session['title'] = "In Depth Reviews From 2019 Latest Forex Brokers - TopAsiaFX";
		
		Yii::app()->session['meta_title'] = "Advanced Top Forex Broker's Reviews & Compares in Asia 2019";

		Yii::app()->session['meta_description'] = "Disclosing information about the best forex broker reviews/compares, spreads, leverage, commission, trading instrument with entire data of top broker trading platforms in Asia.";
	
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index', array('brokers_data' => $brokers_data, 'banner_data' => $banner_data, 'faqs' => $faqs, 'posts' => $posts));
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionAbout()
	{
		$this->layout='//layouts/column2';
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$sql = "SELECT * FROM tbl_brokers ORDER BY score DESC LIMIT 5";

		$brokers_data = Yii::app()->db->createCommand($sql)->queryAll();

		$banner_sql = "SELECT * FROM banner_settings";

		$raw_banner_data = Yii::app()->db->createCommand($banner_sql)->queryAll();
		foreach ($raw_banner_data as $key => $value) {
			$banner_data[$value['position']] = $value;
		}

		Yii::app()->session['title'] = "Advanced Top Forex Broker's Reviews & Compares in Asia 2019";
		
		Yii::app()->session['meta_title'] = "Advanced Top Forex Broker's Reviews & Compares in Asia 2019";

		Yii::app()->session['meta_description'] = "Disclosing information about the best forex broker reviews/compares, spreads, leverage, commission, trading instrument with entire data of top broker trading platforms in Asia.";

		$this->render('about', array('brokers_data' => $brokers_data, 'banner_data'=>$banner_data));
	}

	/**
	 * This is the default 'review' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionReview($url)
	{
		if(!empty($_GET['url'])){
			$url = trim($_GET['url']);
			$this->layout='//layouts/column2';
			// renders the view file 'protected/views/site/index.php'
			// using the default layout 'protected/views/layouts/main.php'
			$sql = "SELECT * FROM tbl_brokers ORDER BY score DESC LIMIT 5";

			$brokers_data = Yii::app()->db->createCommand($sql)->queryAll();

			$single_broker_sql = "SELECT * FROM tbl_brokers WHERE broker_url='" . $url . "'";

			$this_broker = Yii::app()->db->createCommand($single_broker_sql)->queryRow();

			if(empty($this_broker)){
				$this->redirect(array('404'));
			}

			$single_broker_users_reviews_sql = "SELECT * FROM tbl_users_review WHERE broker_id='" . $this_broker['id'] . "' AND approved=1";

			$single_broker_users_reviews = Yii::app()->db->createCommand($single_broker_users_reviews_sql)->queryAll();

			$banner_sql = "SELECT * FROM banner_settings";

			$raw_banner_data = Yii::app()->db->createCommand($banner_sql)->queryAll();
			foreach ($raw_banner_data as $key => $value) {
				$banner_data[$value['position']] = $value;
			}

			$faqs_sql = "SELECT * FROM faqs WHERE page='" . $url . "'";

			$faqs = Yii::app()->db->createCommand($faqs_sql)->queryAll();
			
			Yii::app()->session['title'] = $this_broker['broker_title'];

			Yii::app()->session['meta_title'] = $this_broker['meta_title'];

			Yii::app()->session['meta_description'] = $this_broker['meta_description'];

			$this->render('review', array('brokers_data' => $brokers_data, 'this_broker' => $this_broker, 'single_broker_users_reviews' => $single_broker_users_reviews, 'banner_data'=>$banner_data, 'faqs'=>$faqs));
		}else{
			$this->redirect(Yii::app()->homeUrl);
		}
		
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$this->layout='//layouts/column2';
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}

		$sql = "SELECT * FROM tbl_brokers ORDER BY score DESC LIMIT 5";

		$brokers_data = Yii::app()->db->createCommand($sql)->queryAll();

		$banner_sql = "SELECT * FROM banner_settings";

		$raw_banner_data = Yii::app()->db->createCommand($banner_sql)->queryAll();
		foreach ($raw_banner_data as $key => $value) {
			$banner_data[$value['position']] = $value;
		}

		Yii::app()->session['title'] = "Advanced Top Forex Broker's Reviews & Compares in Asia 2019";
		
		Yii::app()->session['meta_title'] = "Advanced Top Forex Broker's Reviews & Compares in Asia 2019";

		Yii::app()->session['meta_description'] = "Disclosing information about the best forex broker reviews/compares, spreads, leverage, commission, trading instrument with entire data of top broker trading platforms in Asia.";

		$this->render('contact',array('model'=>$model, 'brokers_data' => $brokers_data, 'banner_data'=>$banner_data));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login()){
				$this->redirect(array('/dashboard/admin'));
			}
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionTerms()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		Yii::app()->session['title'] = "Advanced Top Forex Broker's Reviews & Compares in Asia 2019";
		
		Yii::app()->session['meta_title'] = "Advanced Top Forex Broker's Reviews & Compares in Asia 2019";

		Yii::app()->session['meta_description'] = "Disclosing information about the best forex broker reviews/compares, spreads, leverage, commission, trading instrument with entire data of top broker trading platforms in Asia.";
		
		$this->render('terms');
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionPrivacy()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		Yii::app()->session['title'] = "Advanced Top Forex Broker's Reviews & Compares in Asia 2019";
		
		Yii::app()->session['meta_title'] = "Advanced Top Forex Broker's Reviews & Compares in Asia 2019";

		Yii::app()->session['meta_description'] = "Disclosing information about the best forex broker reviews/compares, spreads, leverage, commission, trading instrument with entire data of top broker trading platforms in Asia.";
		
		$this->render('privacy');
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionDepositBonus()
	{
		$this->layout='//layouts/main_two';

		Yii::app()->session['title'] = "Forex Best Deposit Bonus Brokers 2019 - TopAsiaFX";
		
		Yii::app()->session['meta_title'] = "Forex Deposit Bonuses 2019 - Best Welcome Bonus Forex brokers ";

		Yii::app()->session['meta_description'] = "TopAsiaFX - Get the forex deposit bonus instantly from the best forex brokers 2019. The list of running forex brokers who are providing the welcome deposit bonus.";

		if(!empty($_GET['url'])){
			$url = trim($_GET['url']);

			$sql = "SELECT * FROM deposit_bonuses WHERE url='" . $url . "'";;

			$deposit_bonus_data = Yii::app()->db->createCommand($sql)->queryRow();

			if(empty($deposit_bonus_data)){
				$this->redirect(array('404'));
			}
			
			Yii::app()->session['meta_title'] = "Forex Deposit Bonus | " . $deposit_bonus_data['title'];

			$deposit_bonus_reviews_sql = "SELECT * FROM deposit_bonuses_review WHERE deposit_bonuses_id='" . $deposit_bonus_data['id'] . "' AND approved=1";

			$deposit_bonus_reviews = Yii::app()->db->createCommand($deposit_bonus_reviews_sql)->queryAll();

			$banner_sql = "SELECT * FROM banner_settings";

			$raw_banner_data = Yii::app()->db->createCommand($banner_sql)->queryAll();
			foreach ($raw_banner_data as $key => $value) {
				$banner_data[$value['position']] = $value;
			}
			
			$this->render('depositbonusdetail', array('deposit_bonus_data' => $deposit_bonus_data, 'deposit_bonus_reviews' => $deposit_bonus_reviews, 'single' => true, 'banner_data' => $banner_data));
		}else{
			$sql = "SELECT * FROM deposit_bonuses ORDER BY update_date DESC";

			$deposit_bonuses_data = Yii::app()->db->createCommand($sql)->queryAll();

			$deposit_bonus_suggestions_sql = "SELECT * FROM deposit_bonus_suggestions WHERE approved=1";

			$deposit_bonus_suggestions = Yii::app()->db->createCommand($deposit_bonus_suggestions_sql)->queryAll();

			$page_content_sql = "SELECT * FROM page_contents WHERE url='forex-deposit-bonuses'";

			$page_content = Yii::app()->db->createCommand($page_content_sql)->queryRow();

			$banner_sql = "SELECT * FROM banner_settings";

			$raw_banner_data = Yii::app()->db->createCommand($banner_sql)->queryAll();
			foreach ($raw_banner_data as $key => $value) {
				$banner_data[$value['position']] = $value;
			}

			$faqs_sql = "SELECT * FROM faqs WHERE page='forex-deposit-bonuses'";

			$faqs = Yii::app()->db->createCommand($faqs_sql)->queryAll();
			
			$this->render('depositbonuses', array('deposit_bonuses_data' => $deposit_bonuses_data, 'deposit_bonus_suggestions' => $deposit_bonus_suggestions, 'single' => false, 'page_content' => $page_content, 'banner_data' => $banner_data, 'faqs' => $faqs));

		}
		
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionNoDepositBonus()
	{

		$this->layout='//layouts/main_two';

		Yii::app()->session['title'] = "Forex Best No Deposit [Sign-up] Bonus Brokers 2019 - TopAsiaFX";
		
		Yii::app()->session['meta_title'] = "Forex No Deposit Bonuses 2019 - Best Free Sign Up Bonus Forex brokers";

		Yii::app()->session['meta_description'] = "TopAsiaFX - Get the forex no deposit bonuses offer from the best forex brokers 2019. The list of running forex brokers who are providing the free sign up bonus.";

		if(!empty($_GET['url'])){
			$url = trim($_GET['url']);

			$sql = "SELECT * FROM no_deposit_bonuses WHERE url='" . $url . "'";;

			$no_deposit_bonus_data = Yii::app()->db->createCommand($sql)->queryRow();

			if(empty($no_deposit_bonus_data)){
				$this->redirect(array('404'));
			}
			
			Yii::app()->session['meta_title'] = "Forex No Deposit Bonus | " . $no_deposit_bonus_data['title'];

			$no_deposit_bonus_reviews_sql = "SELECT * FROM no_deposit_bonuses_review WHERE no_deposit_bonuses_id='" . $no_deposit_bonus_data['id'] . "' AND approved=1";

			$no_deposit_bonus_reviews = Yii::app()->db->createCommand($no_deposit_bonus_reviews_sql)->queryAll();

			$banner_sql = "SELECT * FROM banner_settings";

			$raw_banner_data = Yii::app()->db->createCommand($banner_sql)->queryAll();
			foreach ($raw_banner_data as $key => $value) {
				$banner_data[$value['position']] = $value;
			}
			
			$this->render('nodepositbonusdetail', array('no_deposit_bonus_data' => $no_deposit_bonus_data, 'no_deposit_bonus_reviews' => $no_deposit_bonus_reviews, 'single' => true, 'banner_data' => $banner_data));
		}else{
			$sql = "SELECT * FROM no_deposit_bonuses ORDER BY update_date DESC";

			$no_deposit_bonuses_data = Yii::app()->db->createCommand($sql)->queryAll();

			$no_deposit_bonus_suggestions_sql = "SELECT * FROM no_deposit_bonus_suggestions WHERE approved=1";

			$no_deposit_bonus_suggestions = Yii::app()->db->createCommand($no_deposit_bonus_suggestions_sql)->queryAll();

			$page_content_sql = "SELECT * FROM page_contents WHERE url='forex-nodeposit-bonuses'";

			$page_content = Yii::app()->db->createCommand($page_content_sql)->queryRow();

			$banner_sql = "SELECT * FROM banner_settings";

			$raw_banner_data = Yii::app()->db->createCommand($banner_sql)->queryAll();
			foreach ($raw_banner_data as $key => $value) {
				$banner_data[$value['position']] = $value;
			}

			$faqs_sql = "SELECT * FROM faqs WHERE page='forex-nodeposit-bonuses'";

			$faqs = Yii::app()->db->createCommand($faqs_sql)->queryAll();

			// renders the view file 'protected/views/site/index.php'
			// using the default layout 'protected/views/layouts/main.php'
			$this->render('nodepositbonuses', array('no_deposit_bonuses_data' => $no_deposit_bonuses_data, 'no_deposit_bonus_suggestions' => $no_deposit_bonus_suggestions, 'single' => false, 'page_content' => $page_content, 'banner_data' => $banner_data, 'faqs' => $faqs));
		}
	}

	public function actionDemoContests()
	{

		$this->layout='//layouts/main_two';

		Yii::app()->session['title'] = "Forex Demo Contests 2019 - TopAsiaFX";
		
		Yii::app()->session['meta_title'] = "Forex Demo Contest – Ultimate Guide, List &amp; Reviews 2019";

		Yii::app()->session['meta_description'] = "Forex Demo Contest is a way for beginners that anyone can join, trade and win a BIG demo competition prize with zero invest. See this fancy contests process 2019.";

		if(!empty($_GET['url'])){
			$url = trim($_GET['url']);

			$sql = "SELECT * FROM demo_contests WHERE url='" . $url . "'";;

			$demo_contests_data = Yii::app()->db->createCommand($sql)->queryRow();

			if(empty($demo_contests_data)){
				$this->redirect(array('404'));
			}
			
			Yii::app()->session['meta_title'] = "Forex No Deposit Bonus | " . $demo_contests_data['title'];

			$demo_contests_reviews_sql = "SELECT * FROM demo_contests_review WHERE demo_contests_id='" . $demo_contests_data['id'] . "' AND approved=1";

			$demo_contests_reviews = Yii::app()->db->createCommand($demo_contests_reviews_sql)->queryAll();

			$banner_sql = "SELECT * FROM banner_settings";

			$raw_banner_data = Yii::app()->db->createCommand($banner_sql)->queryAll();
			foreach ($raw_banner_data as $key => $value) {
				$banner_data[$value['position']] = $value;
			}
			
			$this->render('democontestsdetail', array('demo_contests_data' => $demo_contests_data, 'demo_contests_reviews' => $demo_contests_reviews, 'single' => true, 'banner_data' => $banner_data));
		}else{
			$sql = "SELECT * FROM demo_contests ORDER BY update_date DESC";

			$demo_contests_data = Yii::app()->db->createCommand($sql)->queryAll();

			$demo_contests_suggestions_sql = "SELECT * FROM demo_contests_suggestions WHERE approved=1";

			$demo_contests_suggestions = Yii::app()->db->createCommand($demo_contests_suggestions_sql)->queryAll();

			$page_content_sql = "SELECT * FROM page_contents WHERE url='demo-contests'";

			$page_content = Yii::app()->db->createCommand($page_content_sql)->queryRow();

			$banner_sql = "SELECT * FROM banner_settings";

			$raw_banner_data = Yii::app()->db->createCommand($banner_sql)->queryAll();
			foreach ($raw_banner_data as $key => $value) {
				$banner_data[$value['position']] = $value;
			}

			$faqs_sql = "SELECT * FROM faqs WHERE page='demo-contests'";

			$faqs = Yii::app()->db->createCommand($faqs_sql)->queryAll();

			// renders the view file 'protected/views/site/index.php'
			// using the default layout 'protected/views/layouts/main.php'
			$this->render('democontests', array('demo_contests_data' => $demo_contests_data, 'demo_contests_suggestions' => $demo_contests_suggestions, 'page_content' => $page_content, 'single' => false, 'banner_data' => $banner_data, 'faqs' => $faqs));
		}
	}

	public function actionLiveContests()
	{

		$this->layout='//layouts/main_two';

		Yii::app()->session['title'] = "Forex Best No Deposit [Sign-up] Bonus Brokers 2019 - TopAsiaFX";
		
		Yii::app()->session['meta_title'] = "Forex Live Contest: Comprehensive Guide, List &amp; Reviews 2019";

		Yii::app()->session['meta_description'] = "Forex Live Contest is a way for PRO traders who can join, trade and chance to win a BIG live competition prize by a minimum deposit. Read the whole contest actions.";

		if(!empty($_GET['url'])){
			$url = trim($_GET['url']);

			$sql = "SELECT * FROM live_contests WHERE url='" . $url . "'";;

			$live_contests_data = Yii::app()->db->createCommand($sql)->queryRow();

			if(empty($live_contests_data)){
				$this->redirect(array('404'));
			}
			
			Yii::app()->session['meta_title'] = "Forex No Deposit Bonus | " . $live_contests_data['title'];

			$live_contests_reviews_sql = "SELECT * FROM live_contests_review WHERE live_contests_id='" . $live_contests_data['id'] . "' AND approved=1";

			$live_contests_reviews = Yii::app()->db->createCommand($live_contests_reviews_sql)->queryAll();

			$banner_sql = "SELECT * FROM banner_settings";

			$raw_banner_data = Yii::app()->db->createCommand($banner_sql)->queryAll();
			foreach ($raw_banner_data as $key => $value) {
				$banner_data[$value['position']] = $value;
			}
			
			$this->render('livecontestsdetail', array('live_contests_data' => $live_contests_data, 'live_contests_reviews' => $live_contests_reviews, 'single' => true, 'banner_data' => $banner_data));
		}else{
			$sql = "SELECT * FROM live_contests ORDER BY update_date DESC";

			$live_contests_data = Yii::app()->db->createCommand($sql)->queryAll();

			$live_contests_suggestions_sql = "SELECT * FROM live_contests_suggestions WHERE approved=1";

			$live_contests_suggestions = Yii::app()->db->createCommand($live_contests_suggestions_sql)->queryAll();

			$page_content_sql = "SELECT * FROM page_contents WHERE url='live-contests'";

			$page_content = Yii::app()->db->createCommand($page_content_sql)->queryRow();

			$banner_sql = "SELECT * FROM banner_settings";

			$raw_banner_data = Yii::app()->db->createCommand($banner_sql)->queryAll();
			foreach ($raw_banner_data as $key => $value) {
				$banner_data[$value['position']] = $value;
			}

			$faqs_sql = "SELECT * FROM faqs WHERE page='live-contests'";

			$faqs = Yii::app()->db->createCommand($faqs_sql)->queryAll();

			// renders the view file 'protected/views/site/index.php'
			// using the default layout 'protected/views/layouts/main.php'
			$this->render('livecontests', array('live_contests_data' => $live_contests_data, 'live_contests_suggestions' => $live_contests_suggestions, 'page_content' => $page_content, 'single' => false, 'banner_data' => $banner_data, 'faqs' => $faqs));
		}
	}


	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionBlogs()
	{
		$this->layout='//layouts/blogs';

		Yii::app()->session['meta_title'] = "Forex Blog- What're happening of the Forex, Commodity and Stock Markets 2019?";

		Yii::app()->session['meta_description'] = "TopAsiaFX Blog- This Forex blog is used to share of 2019's daily Forex trading experience, stock markets, commodity, and other currency related information that can bring you an advanced trader.";

		$banner_sql = "SELECT * FROM banner_settings";

		$raw_banner_data = Yii::app()->db->createCommand($banner_sql)->queryAll();
		foreach ($raw_banner_data as $key => $value) {
			$banner_data[$value['position']] = $value;
		}

		/*$sql = "SELECT * FROM tbl_brokers ORDER BY score DESC LIMIT 5";

		$brokers_data = Yii::app()->db->createCommand($sql)->queryAll();*/

		$category_sql = "SELECT * FROM categories";
		$categories = Yii::app()->db->createCommand($category_sql)->queryAll();

		if(!empty($_GET['url'])){
			$this->layout='//layouts/blogs';
			$url = trim($_GET['url']);

			$sql = "SELECT * FROM posts WHERE url='" . $url . "'";
					
			$post = Yii::app()->db->createCommand($sql)->queryRow();

			if(empty($post)){
				$this->redirect(array('404'));
			}

			$update_view_count_sql = "UPDATE posts SET total_views = " . ($post['total_views'] + 1) . " WHERE id=".$post['id'];

			Yii::app()->db->createCommand($update_view_count_sql)->execute();
			
			$blog_categories_sql = "SELECT * FROM categories 
									INNER JOIN post_category ON categories.id = post_category.category_id
									WHERE post_category.post_id='" . $post['id'] . "'";

			$blog_categories = Yii::app()->db->createCommand($blog_categories_sql)->queryAll();

			Yii::app()->session['title'] = $post['title'];
			
			if(!empty($post['meta_title'])){
				Yii::app()->session['meta_title'] = $post['meta_title'];
			}

			if(!empty($post['meta_description'])){
				Yii::app()->session['meta_description'] = $post['meta_description'];
			}

			$post_reviews_sql = "SELECT * FROM posts_review WHERE post_id='" . $post['id'] . "' AND approved=1";

			$post_reviews = Yii::app()->db->createCommand($post_reviews_sql)->queryAll();
			
			$this->render('blogdetail', array('post' => $post, 'blog_categories' => $blog_categories, 'post_reviews' => $post_reviews, 'single' => true, 'banner_data' => $banner_data, 'categories' => $categories));
		}else{
			if (!empty($_GET['cat'])) {

				$category = trim(urldecode($_GET['cat']));

				Yii::app()->session['title'] = "TopAsiaFX - Blog - " . $category;

				$sql = "SELECT * FROM posts 
						INNER JOIN post_category ON posts.id = post_category.post_id 
						INNER JOIN categories ON categories.id = post_category.category_id 
						WHERE categories.name = '".$category."'
						AND status='active' 
						ORDER BY posts.create_date DESC LIMIT 12";

				$posts = Yii::app()->db->createCommand($sql)->queryAll();

				$most_viewed_sql = "SELECT * FROM posts 
						INNER JOIN post_category ON posts.id = post_category.post_id 
						INNER JOIN categories ON categories.id = post_category.category_id 
						WHERE categories.name = '".$category."'
						AND posts.status='active' 
						ORDER BY posts.total_views DESC LIMIT 10";

				$most_viewed_posts = Yii::app()->db->createCommand($most_viewed_sql)->queryAll();

			}else{
				$sql = "SELECT * FROM posts WHERE status='active' ORDER BY create_date DESC LIMIT 12";

				$posts = Yii::app()->db->createCommand($sql)->queryAll();

				$most_viewed_sql = "SELECT * FROM posts WHERE status='active' ORDER BY total_views DESC LIMIT 10";

				$most_viewed_posts = Yii::app()->db->createCommand($most_viewed_sql)->queryAll();
				
				Yii::app()->session['title'] = "TopAsiaFX - Blog";
				
			}

			$this->render('blog', array('posts' => $posts, 'most_viewed_posts' => $most_viewed_posts, 'banner_data' => $banner_data, 'categories' => $categories));
			

		}
		
	}

	public function action404(){
		$this->layout='//layouts/main_two';

		Yii::app()->session['meta_title'] = "Advanced Top Forex Broker's Reviews & Compares in Asia 2019";

		Yii::app()->session['meta_description'] = "Disclosing information about the best forex broker reviews/compares, spreads, leverage, commission, trading instrument with entire data of top broker trading platforms in Asia.";

		$this->render('404');
	}

}