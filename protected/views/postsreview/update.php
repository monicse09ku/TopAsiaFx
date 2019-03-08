<?php
/* @var $this PostsreviewController */
/* @var $model PostsReview */

$this->breadcrumbs=array(
	'Posts Reviews'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PostsReview', 'url'=>array('index')),
	array('label'=>'Create PostsReview', 'url'=>array('create')),
	array('label'=>'View PostsReview', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PostsReview', 'url'=>array('admin')),
);
?>

<h1>Update PostsReview <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>