<?php
/* @var $this LiveContestsReviewController */
/* @var $model LiveContestsReview */

$this->breadcrumbs=array(
	'Live Contests Reviews'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Live Contests Review', 'url'=>array('index')),
	array('label'=>'Manage Live Contests Review', 'url'=>array('admin')),
);
?>

<h1>Create Live Contests Review</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>