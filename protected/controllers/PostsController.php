<?php

class PostsController extends Controller
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
		$model=new Posts;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Posts']))
		{
			
			$model->attributes=$_POST['Posts'];

			if(!empty($_FILES['thumbnail']['tmp_name'])){
				$image_file_path = "images/post_images/";
				$image_file_name = strtotime(date('Y-m-d H:i:s')) . '_' . $_FILES['thumbnail']['name'];
				move_uploaded_file($_FILES['thumbnail']['tmp_name'], $image_file_path.$image_file_name);
				$model->thumbnail = $image_file_name;
			}

			$date = date("Y-m-d H:i:s");
			$model->create_date = $date;
			$model->update_date = $date;

			if($model->save()){
				$categories = explode(',', $_POST['Posts']['categories']);
				if (!empty($categories)) {

					$command = Yii::app()->db->createCommand();
					foreach ($categories as $key => $value) {
						$command->insert('post_category', array(
							'post_id' => $model->id, 
							'category_id' => $value, 
							'create_date' => $date, 
							'update_date' => $date, 
						));
					}
				}

				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$categories = Yii::app()->db->createCommand()
						    ->select()
						    ->from('categories')
						    ->queryAll();

		$this->render('create',array(
			'model'=>$model,
			'categories'=>$categories,
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

		$thumbnail = $model->thumbnail;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Posts']))
		{
			$model->attributes=$_POST['Posts'];

			if(!empty($_FILES['thumbnail']['tmp_name'])){
				$image_file_path = "images/post_images/";
				$image_file_name = strtotime(date('Y-m-d H:i:s')) . '_' . $_FILES['thumbnail']['name'];
				move_uploaded_file($_FILES['thumbnail']['tmp_name'], $image_file_path.$image_file_name);
				$model->thumbnail = $image_file_name;
			}else{
				$model->thumbnail = $thumbnail;
			}

			$date = date("Y-m-d H:i:s");
			$model->update_date = $date;

			if($model->save())
				$categories = explode(',', $_POST['Posts']['categories']);
				if (!empty($categories)) {
					
					$sql = "DELETE FROM post_category WHERE post_id=$id";
					Yii::app()->db->createCommand($sql)->execute();

					$command = Yii::app()->db->createCommand();
					foreach ($categories as $key => $value) {
						$command->insert('post_category', array(
							'post_id' => $id, 
							'category_id' => $value, 
							'create_date' => $date, 
							'update_date' => $date, 
						));
					}
				}

				$this->redirect(array('view','id'=>$model->id));
		}

		$categories = Yii::app()->db->createCommand()
						    ->select()
						    ->from('categories')
						    ->queryAll();

		$this->render('update',array(
			'model'=>$model,
			'categories'=>$categories,
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
		$dataProvider=new CActiveDataProvider('Posts');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Posts('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Posts']))
			$model->attributes=$_GET['Posts'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Posts the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Posts::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Posts $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='posts-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
