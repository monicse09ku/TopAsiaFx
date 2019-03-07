<?php
/* @var $this BrokersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Brokers',
);

$this->menu=array(
	array('label'=>'Create Brokers', 'url'=>array('create')),
	array('label'=>'Manage Brokers', 'url'=>array('admin')),
);
?>

<h1>Brokers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
