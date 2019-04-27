<?php
/* @var $this PageContentController */
/* @var $model PageContents */

$this->breadcrumbs=array(
	'Page Contents'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PageContents', 'url'=>array('index')),
	array('label'=>'Create PageContents', 'url'=>array('create')),
	array('label'=>'Update PageContents', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PageContents', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PageContents', 'url'=>array('admin')),
);
?>

<h1>View PageContents #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'url',
		'top_content',
		'bottom_content',
		'create_date',
		'update_date',
	),
)); ?>
