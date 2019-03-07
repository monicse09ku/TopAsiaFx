<?php
/* @var $this NoDepositBonusesController */
/* @var $model NoDepositBonuses */

$this->breadcrumbs=array(
	'No Deposit Bonuses'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List NoDepositBonuses', 'url'=>array('index')),
	array('label'=>'Create NoDepositBonuses', 'url'=>array('create')),
	array('label'=>'View NoDepositBonuses', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage NoDepositBonuses', 'url'=>array('admin')),
);
?>

<h1>Update NoDepositBonuses <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>