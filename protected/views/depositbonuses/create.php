<?php
/* @var $this DepositBonusesController */
/* @var $model DepositBonuses */

$this->breadcrumbs=array(
	'Deposit Bonuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DepositBonuses', 'url'=>array('index')),
	array('label'=>'Manage DepositBonuses', 'url'=>array('admin')),
);
?>

<h1>Create DepositBonuses</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>