<?php
/* @var $this DemocontestController */
/* @var $model DemoContests */

$this->breadcrumbs=array(
	'Demo Contests',
);

$this->menu=array(
	array('label'=>'Create Demo Contests', 'url'=>array('create')),
	array('label'=>'Manage Demo Contests', 'url'=>array('admin')),
);
?>

<h1>Demo Contests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
