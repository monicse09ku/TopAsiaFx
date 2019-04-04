<?php
/* @var $this DemoContestsReviewController */
/* @var $model DemoContestsReview */

$this->breadcrumbs=array(
	'Demo Contests Reviews'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Demo Contests Review', 'url'=>array('index')),
	array('label'=>'Create Demo Contests Review', 'url'=>array('create')),
	array('label'=>'Update Demo Contests Review', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Demo Contests Review', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Demo Contests Review', 'url'=>array('admin')),
);
?>

<h1>View Demo Contests Review #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'demo_contests_id',
		'name',
		'country',
		'user_email',
		'comment',
		'approved',
		'score',
		'priority',
		'create_date',
		'update_date',
	),
)); ?>
