<?php
/* @var $this DepositBonusesReviewController */
/* @var $model DepositBonusesReview */

$this->breadcrumbs=array(
	'Deposit Bonuses Reviews'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List DepositBonusesReview', 'url'=>array('index')),
	array('label'=>'Create DepositBonusesReview', 'url'=>array('create')),
	array('label'=>'Update DepositBonusesReview', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DepositBonusesReview', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DepositBonusesReview', 'url'=>array('admin')),
);
?>

<h1>View DepositBonusesReview #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'deposit_bonuses_id',
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
