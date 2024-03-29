<?php

class BrokersController extends Controller
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
		$model=new Brokers;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Brokers']))
		{
			$model->attributes = $_POST['Brokers'];
			$model->deposit_options = implode(";", $_POST['deposit_options']);

			if(!empty($_FILES['broker_image']['tmp_name'])){
				$image_file_path = "images/broker_images/";
				$image_file_name = $_FILES['broker_image']['name'];
				move_uploaded_file($_FILES['broker_image']['tmp_name'], $image_file_path.$image_file_name);
				$model->broker_image = $image_file_name;

			}

			$date = date("Y-m-d H:i:s");
			$model->create_date = $date;
			$model->update_date = $date;
			
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

		$broker_image = $model->broker_image;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Brokers']))
		{
			$model->attributes = $_POST['Brokers'];
			
			$model->deposit_options = implode(";", $_POST['deposit_options']);

			if(!empty($_FILES['broker_image']['tmp_name'])){		
				$path_parts = pathinfo($_FILES['broker_image']['name']);		
				$image_extn = $path_parts['extension'];		
		
				$image_file_path = "images/broker_images/";		
				$image_file_name = 'broker_'.$id.'.'.$image_extn;		
				move_uploaded_file($_FILES['broker_image']['tmp_name'], $image_file_path.$image_file_name);		
				$model->broker_image = $image_file_name;		
		
			}else{
				$model->broker_image = $broker_image;
			}

			$date = date("Y-m-d H:i:s");
			$model->update_date = $date;
				
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
		$dataProvider=new CActiveDataProvider('Brokers');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Brokers('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Brokers']))
			$model->attributes=$_GET['Brokers'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Brokers the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Brokers::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Brokers $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='brokers-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
