<?php
/* @var $this DemoContestsReviewController */
/* @var $model DemoContestsReview */

$this->breadcrumbs=array(
	'Demo Contests Suggestions'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Demo Contests Suggestions', 'url'=>array('index')),
	array('label'=>'Create Demo Contests Suggestions', 'url'=>array('create')),
	array('label'=>'View Demo Contests Suggestions', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Demo Contests Suggestions', 'url'=>array('admin')),
);
?>

<h1>Update Demo Contests Suggestions <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>