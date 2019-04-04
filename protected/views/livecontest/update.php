<?php
/* @var $this LivecontestController */
/* @var $model LiveContests */

$this->breadcrumbs=array(
	'Live Contests'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Live Contests', 'url'=>array('index')),
	array('label'=>'Create Live Contests', 'url'=>array('create')),
	array('label'=>'View Live Contests', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Live Contests', 'url'=>array('admin')),
);
?>

<h1>Update Live Contests <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>