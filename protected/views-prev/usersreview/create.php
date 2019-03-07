<?php
/* @var $this UsersReviewController */
/* @var $model UsersReview */

$this->breadcrumbs=array(
	'Users Reviews'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UsersReview', 'url'=>array('index')),
	array('label'=>'Manage UsersReview', 'url'=>array('admin')),
);
?>

<h1>Create UsersReview</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>