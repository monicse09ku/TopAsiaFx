<?php
/* @var $this DepositBonusesController */
/* @var $model DepositBonuses */

$this->breadcrumbs=array(
	'Deposit Bonuses'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List DepositBonuses', 'url'=>array('index')),
	array('label'=>'Create DepositBonuses', 'url'=>array('create')),
	array('label'=>'Update DepositBonuses', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DepositBonuses', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DepositBonuses', 'url'=>array('admin')),
);
?>

<h1>View DepositBonuses #<?php echo $model->id; ?></h1>

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
