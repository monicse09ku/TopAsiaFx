<?php
/* @var $this BrokersController */
/* @var $model Brokers */

$this->breadcrumbs=array(
	'Brokers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Brokers', 'url'=>array('index')),
	array('label'=>'Create Brokers', 'url'=>array('create')),
	array('label'=>'View Brokers', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Brokers', 'url'=>array('admin')),
);
?>

<h1>Update Brokers <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>