<?php
/* @var $this LivecontestController */
/* @var $model LiveContests */

$this->breadcrumbs=array(
	'Live Contests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Live Contests', 'url'=>array('index')),
	array('label'=>'Manage Live Contests', 'url'=>array('admin')),
);
?>

<h1>Create Live Contests</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>