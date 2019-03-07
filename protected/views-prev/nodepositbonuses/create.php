<?php
/* @var $this NoDepositBonusesController */
/* @var $model NoDepositBonuses */

$this->breadcrumbs=array(
	'No Deposit Bonuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NoDepositBonuses', 'url'=>array('index')),
	array('label'=>'Manage NoDepositBonuses', 'url'=>array('admin')),
);
?>

<h1>Create NoDepositBonuses</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>