<?php
/* @var $this BrokersController */
/* @var $model Brokers */

$this->breadcrumbs=array(
	'Brokers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Brokers', 'url'=>array('index')),
	array('label'=>'Manage Brokers', 'url'=>array('admin')),
);
?>

<h1>Create Brokers</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>