<?php
/* @var $this LivecontestController */
/* @var $model LiveContests */

$this->breadcrumbs=array(
	'Live Contests',
);

$this->menu=array(
	array('label'=>'Create Live Contests', 'url'=>array('create')),
	array('label'=>'Manage Live Contests', 'url'=>array('admin')),
);
?>

<h1>Live Contests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
