<?php
/* @var $this DepositBonusesController */
/* @var $model DepositBonuses */

$this->breadcrumbs=array(
	'Deposit Bonuses'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DepositBonuses', 'url'=>array('index')),
	array('label'=>'Create DepositBonuses', 'url'=>array('create')),
	array('label'=>'View DepositBonuses', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DepositBonuses', 'url'=>array('admin')),
);
?>

<h1>Update DepositBonuses <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>