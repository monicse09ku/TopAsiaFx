<?php
/* @var $this NoDepositBonusesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'No Deposit Bonuses',
);

$this->menu=array(
	array('label'=>'Create NoDepositBonuses', 'url'=>array('create')),
	array('label'=>'Manage NoDepositBonuses', 'url'=>array('admin')),
);
?>

<h1>No Deposit Bonuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
