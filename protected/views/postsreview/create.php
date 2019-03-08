<?php
/* @var $this PostsreviewController */
/* @var $model PostsReview */

$this->breadcrumbs=array(
	'Posts Reviews'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PostsReview', 'url'=>array('index')),
	array('label'=>'Manage PostsReview', 'url'=>array('admin')),
);
?>

<h1>Create PostsReview</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>