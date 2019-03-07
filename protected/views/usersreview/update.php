<?php
/* @var $this UsersReviewController */
/* @var $model UsersReview */

$this->breadcrumbs=array(
	'Users Reviews'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UsersReview', 'url'=>array('index')),
	array('label'=>'Create UsersReview', 'url'=>array('create')),
	array('label'=>'View UsersReview', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UsersReview', 'url'=>array('admin')),
);
?>

<h1>Update UsersReview <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>