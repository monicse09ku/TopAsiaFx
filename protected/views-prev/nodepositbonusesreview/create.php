<?php
/* @var $this NoDepositBonusesReviewController */
/* @var $model NoDepositBonusesReview */

$this->breadcrumbs=array(
	'No Deposit Bonuses Reviews'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NoDepositBonusesReview', 'url'=>array('index')),
	array('label'=>'Manage NoDepositBonusesReview', 'url'=>array('admin')),
);
?>

<h1>Create NoDepositBonusesReview</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>