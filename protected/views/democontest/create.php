<?php
/* @var $this DemocontestController */
/* @var $model DemoContests */

$this->breadcrumbs=array(
	'Demo Contests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Demo Contests', 'url'=>array('index')),
	array('label'=>'Manage Demo Contests', 'url'=>array('admin')),
);
?>

<h1>Create Demo Contests</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>