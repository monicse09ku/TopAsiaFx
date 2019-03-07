<?php
/* @var $this NoDepositBonusesReviewController */
/* @var $model NoDepositBonusesReview */

$this->breadcrumbs=array(
	'No Deposit Bonuses Reviews'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List NoDepositBonusesReview', 'url'=>array('index')),
	array('label'=>'Create NoDepositBonusesReview', 'url'=>array('create')),
	array('label'=>'Update NoDepositBonusesReview', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete NoDepositBonusesReview', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NoDepositBonusesReview', 'url'=>array('admin')),
);
?>

<h1>View NoDepositBonusesReview #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'no_deposit_bonuses_id',
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
