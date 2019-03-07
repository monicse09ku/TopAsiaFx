<?php
/* @var $this NoDepositBonusesReviewController */
/* @var $model NoDepositBonusesReview */

$this->breadcrumbs=array(
	'No Deposit Bonuses Reviews'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List NoDepositBonusesReview', 'url'=>array('index')),
	array('label'=>'Create NoDepositBonusesReview', 'url'=>array('create')),
	array('label'=>'View NoDepositBonusesReview', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage NoDepositBonusesReview', 'url'=>array('admin')),
);
?>

<h1>Update NoDepositBonusesReview <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>