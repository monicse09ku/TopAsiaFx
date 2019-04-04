<?php
/* @var $this DemocontestController */
/* @var $model DemoContests */

$this->breadcrumbs=array(
	'Demo Contests'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Demo Contests', 'url'=>array('index')),
	array('label'=>'Create Demo Contests', 'url'=>array('create')),
	array('label'=>'View Demo Contests', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Demo Contests', 'url'=>array('admin')),
);
?>

<h1>Update Demo Contests <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>