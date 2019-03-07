<?php
/* @var $this DepositBonusesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Deposit Bonuses',
);

$this->menu=array(
	array('label'=>'Create DepositBonuses', 'url'=>array('create')),
	array('label'=>'Manage DepositBonuses', 'url'=>array('admin')),
);
?>

<h1>Deposit Bonuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
