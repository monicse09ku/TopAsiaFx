<?php
/* @var $this DepositBonusesReviewController */
/* @var $model DepositBonusesReview */

$this->breadcrumbs=array(
	'Deposit Bonuses Reviews'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DepositBonusesReview', 'url'=>array('index')),
	array('label'=>'Create DepositBonusesReview', 'url'=>array('create')),
	array('label'=>'View DepositBonusesReview', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DepositBonusesReview', 'url'=>array('admin')),
);
?>

<h1>Update DepositBonusesReview <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>