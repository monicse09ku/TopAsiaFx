<?php
/* @var $this BannerSettingsController */
/* @var $model BannerSettings */

$this->breadcrumbs=array(
	'Banner Settings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BannerSettings', 'url'=>array('index')),
	array('label'=>'Manage BannerSettings', 'url'=>array('admin')),
);
?>

<h1>Create BannerSettings</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>