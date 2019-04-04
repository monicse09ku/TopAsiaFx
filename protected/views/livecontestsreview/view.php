<?php
/* @var $this LiveContestsReviewController */
/* @var $model LiveContestsReview */

$this->breadcrumbs=array(
	'Live Contests Reviews'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Live Contests Review', 'url'=>array('index')),
	array('label'=>'Create Live Contests Review', 'url'=>array('create')),
	array('label'=>'Update Live Contests Review', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Live Contests Review', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Live Contests Review', 'url'=>array('admin')),
);
?>

<h1>View Live Contests Review #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'live_contests_id',
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
