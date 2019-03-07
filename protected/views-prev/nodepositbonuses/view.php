<?php
/* @var $this NoDepositBonusesController */
/* @var $model NoDepositBonuses */

$this->breadcrumbs=array(
	'No Deposit Bonuses'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List NoDepositBonuses', 'url'=>array('index')),
	array('label'=>'Create NoDepositBonuses', 'url'=>array('create')),
	array('label'=>'Update NoDepositBonuses', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete NoDepositBonuses', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NoDepositBonuses', 'url'=>array('admin')),
);
?>

<h1>View NoDepositBonuses #<?php echo $model->id; ?></h1>

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
