<?php
/* @var $this UsersReviewController */
/* @var $model UsersReview */

$this->breadcrumbs=array(
	'Users Reviews'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List UsersReview', 'url'=>array('index')),
	array('label'=>'Create UsersReview', 'url'=>array('create')),
	array('label'=>'Update UsersReview', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UsersReview', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UsersReview', 'url'=>array('admin')),
);
?>

<h1>View UsersReview #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'country',
		'user_email',
		'cell_no',
		'comment',
		'approved',
		'broker_id',
		'score',
		'priority',
		'create_date',
		'update_date',
	),
)); ?>
