<?php
/* @var $this DemocontestController */
/* @var $model DemoContests */

$this->breadcrumbs=array(
	'Demo Contests'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Demo Contests', 'url'=>array('index')),
	array('label'=>'Create Demo Contests', 'url'=>array('create')),
	array('label'=>'Update Demo Contests', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Demo Contests', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Demo Contests', 'url'=>array('admin')),
);
?>

<h1>View Demo Contests #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'url',
		'image',
		'details',
		'status',
		'total_rating',
		'total_rater',
		'average_rating',
		'available_till',
		'total_comments',
		'create_date',
		'update_date',
	),
)); ?>
