<?php
/* @var $this PageContentController */
/* @var $model PageContents */

$this->breadcrumbs=array(
	'Page Contents'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PageContents', 'url'=>array('index')),
	array('label'=>'Create PageContents', 'url'=>array('create')),
	array('label'=>'View PageContents', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PageContents', 'url'=>array('admin')),
);
?>

<h1>Update PageContents <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>