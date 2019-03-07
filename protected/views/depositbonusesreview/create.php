<?php
/* @var $this DepositBonusesReviewController */
/* @var $model DepositBonusesReview */

$this->breadcrumbs=array(
	'Deposit Bonuses Reviews'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DepositBonusesReview', 'url'=>array('index')),
	array('label'=>'Manage DepositBonusesReview', 'url'=>array('admin')),
);
?>

<h1>Create DepositBonusesReview</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>