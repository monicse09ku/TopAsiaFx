<?php
/* @var $this BrokersController */
/* @var $model Brokers */

$this->breadcrumbs=array(
	'Brokers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Brokers', 'url'=>array('index')),
	array('label'=>'Create Brokers', 'url'=>array('create')),
	array('label'=>'Update Brokers', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Brokers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Brokers', 'url'=>array('admin')),
);
?>

<h1>View Brokers #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'broker_title',
		'meta_title',
		'meta_description',
		'broker_url',
		'broker_image',
		'bonus_title',
		'bonus_desc',
		'min_deposit',
		'spreads_from',
		'user_score',
		'max_leverage',
		'regulation',
		'review_title',
		'pros',
		'cons',
		'score',
		'site_address',
		'broker_short_desc',
		'broker_detail_desc',
		'telephone',
		'pairs_offered',
		'markets',
		'deposit_options',
		'education',
		'total_rating',
		'total_rating_user',
		'create_date',
		'update_date',
	),
)); ?>
