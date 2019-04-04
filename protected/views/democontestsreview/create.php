<?php
/* @var $this DemoContestsReviewController */
/* @var $model DemoContestsReview */

$this->breadcrumbs=array(
	'Demo Contests Reviews'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Demo Contests Review', 'url'=>array('index')),
	array('label'=>'Manage Demo Contests Review', 'url'=>array('admin')),
);
?>

<h1>Create Demo Contests Review</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>