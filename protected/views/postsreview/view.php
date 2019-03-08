<?php
/* @var $this PostsreviewController */
/* @var $model PostsReview */

$this->breadcrumbs=array(
	'Posts Reviews'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List PostsReview', 'url'=>array('index')),
	array('label'=>'Create PostsReview', 'url'=>array('create')),
	array('label'=>'Update PostsReview', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PostsReview', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PostsReview', 'url'=>array('admin')),
);
?>

<h1>View PostsReview #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'post_id',
		'name',
		'country',
		'user_email',
		'comment',
		'approved',
		'create_date',
		'update_date',
	),
)); ?>
