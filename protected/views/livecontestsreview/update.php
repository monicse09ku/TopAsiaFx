<?php
/* @var $this LiveContestsReviewController */
/* @var $model LiveContestsReview */

$this->breadcrumbs=array(
	'Live Contests Reviews'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Live Contests Review', 'url'=>array('index')),
	array('label'=>'Create Live Contests Review', 'url'=>array('create')),
	array('label'=>'View Live Contests Review', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Live Contests Review', 'url'=>array('admin')),
);
?>

<h1>Update Live Contests Review <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>