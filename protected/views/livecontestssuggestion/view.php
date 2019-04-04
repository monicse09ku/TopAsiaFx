<?php
/* @var $this LivecontestssuggestionController */
/* @var $model LiveContestsSuggestion */

$this->breadcrumbs=array(
	'Live Contests Suggestions'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Live Contests Suggestions', 'url'=>array('index')),
	array('label'=>'Create Live Contests Suggestions', 'url'=>array('create')),
	array('label'=>'Update Live Contests Suggestions', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Live Contests Suggestions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Live Contests Suggestions', 'url'=>array('admin')),
);
?>

<h1>View Live Contests Suggestions #<?php echo $model->id; ?></h1>

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
