<?php
/* @var $this DemoContestsReviewController */
/* @var $model DemoContestsReview */

$this->breadcrumbs=array(
	'Demo Contests Reviews'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Demo Contests Review', 'url'=>array('index')),
	array('label'=>'Create Demo Contests Review', 'url'=>array('create')),
	array('label'=>'View Demo Contests Review', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Demo Contests Review', 'url'=>array('admin')),
);
?>

<h1>Update Demo Contests Review <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>