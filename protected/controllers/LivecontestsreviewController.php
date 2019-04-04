<?php

class LiveContestsReviewController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/admin';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			//'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('UsersReviewInsert'),
				'users'=>array('*'),
			),
			/*array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('create', 'verifyUser'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('admin'),
				//'users'=>array('@'),
				'expression'=>'$user->isMember()'
			),*/
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'users'=>array('*'),
				//'users'=>array('admin'),
				'expression'=>'$user->isAdmin()'
			),
			array('deny',  // deny all users
				'users'=>array('*'),
				'deniedCallback' => function(){Yii::app()->user->redirectToHome();},
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new LiveContestsReview;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['LiveContestsReview']))
		{
			$model->attributes=$_POST['LiveContestsReview'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['LiveContestsReview']))
		{
			$model->attributes=$_POST['LiveContestsReview'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('LiveContestsReview');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new LiveContestsReview('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['LiveContestsReview']))
			$model->attributes=$_GET['LiveContestsReview'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return LiveContestsReview the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=LiveContestsReview::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param LiveContestsReview $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='live-contests-review-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionUsersReviewInsert(){
		$result['status'] = 'failed';
		$result['message'] = 'Something went wrong';

		if (filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
			
			$live_contests_id = trim($_POST['live_contests_id']);
			$name = trim($_POST['name']);
			$country = trim($_POST['country']);
			$user_email = trim($_POST['user_email']);
			$comment = trim($_POST['comment']);
			$approved = 0;
			$score = trim($_POST['rating']);
			$date = date('Y-m-d');
			$find_sql = "SELECT * FROM live_contests_review WHERE live_contests_id=$live_contests_id AND user_email='".$user_email."'";
			$already_rated = Yii::app()->db->createCommand($find_sql)->queryRow();

			if(!empty($already_rated)){
				$result['status'] = 'failed';
				$result['message'] = 'You have already rated this broker.';
			}else{
				$sql = "INSERT INTO `live_contests_review` (live_contests_id, name, country, user_email, comment, approved, score, create_date, update_date) VALUES ('".$live_contests_id."', '".$name. "', '".$country."', '".$user_email."', '".$comment."', '".$approved."', '".$score."', '".$date."', '".$date."')";
		    
		    	Yii::app()->db->createCommand($sql)->execute();

		    	$live_contests_sql = "SELECT * FROM live_contests WHERE id=$live_contests_id";
				$live_contest = Yii::app()->db->createCommand($live_contests_sql)->queryRow();

				$updated_rating = $live_contest['total_rating'] + $score;
				$updated_total_rater = $live_contest['total_rater'] + 1;
				$updated_average_rating = ceil($updated_rating/$updated_total_rater);

				$update_sql = "UPDATE live_contests SET total_rating = '" . $updated_rating . "', total_rater = '" . $updated_total_rater ."', average_rating = '" . $updated_average_rating . "' WHERE id='" . $live_contest['id'] . "'";
				
				Yii::app()->db->createCommand($update_sql)->execute();
			
				$result['status'] = 'success';
				$result['message'] = 'Thanks for your review, we will approve it shortly!!!';
			}
			
		}else{
			$result['status'] = 'failed';
			$result['message'] = 'You must provide a valid email.';
		}
		die(json_encode($result));
	}
}
