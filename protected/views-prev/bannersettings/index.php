<?php
/* @var $this BannerSettingsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Banner Settings',
);

$this->menu=array(
	array('label'=>'Create BannerSettings', 'url'=>array('create')),
	array('label'=>'Manage BannerSettings', 'url'=>array('admin')),
);
?>

<h1>Banner Settings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
