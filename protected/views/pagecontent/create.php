<?php
/* @var $this PageContentController */
/* @var $model PageContents */

$this->breadcrumbs=array(
	'Page Contents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PageContents', 'url'=>array('index')),
	array('label'=>'Manage PageContents', 'url'=>array('admin')),
);
?>

<h1>Create PageContents</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>