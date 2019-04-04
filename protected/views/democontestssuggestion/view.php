<?php
/* @var $this DemoContestsReviewController */
/* @var $model DemoContestsReview */

$this->breadcrumbs=array(
	'Demo Contests Suggestions'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Demo Contests Suggestions', 'url'=>array('index')),
	array('label'=>'Create Demo Contests Suggestions', 'url'=>array('create')),
	array('label'=>'Update Demo Contests Suggestions', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Demo Contests Suggestions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Demo Contests Suggestions', 'url'=>array('admin')),
);
?>

<h1>View Demo Contests Suggestions #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'suggestion',
		'approved',
		'create_date',
		'update_date',
	),
)); ?>
