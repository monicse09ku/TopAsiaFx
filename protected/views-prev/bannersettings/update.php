<?php
/* @var $this BannerSettingsController */
/* @var $model BannerSettings */

$this->breadcrumbs=array(
	'Banner Settings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BannerSettings', 'url'=>array('index')),
	array('label'=>'Create BannerSettings', 'url'=>array('create')),
	array('label'=>'View BannerSettings', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BannerSettings', 'url'=>array('admin')),
);
?>

<h1>Update BannerSettings <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>