<?php
/* @var $this BannerSettingsController */
/* @var $model BannerSettings */

$this->breadcrumbs=array(
	'Banner Settings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BannerSettings', 'url'=>array('index')),
	array('label'=>'Create BannerSettings', 'url'=>array('create')),
	array('label'=>'Update BannerSettings', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BannerSettings', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BannerSettings', 'url'=>array('admin')),
);
?>

<h1>View BannerSettings #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(
			'value' => EWebUser::getBannerPosition($model->position),
			'name' => 'position'
		),
		'code',
		'create_date',
		'update_date',
	),
)); ?>
