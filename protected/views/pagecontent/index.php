<?php
/* @var $this PageContentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Page Contents',
);

$this->menu=array(
	array('label'=>'Create PageContents', 'url'=>array('create')),
	array('label'=>'Manage PageContents', 'url'=>array('admin')),
);
?>

<h1>Page Contents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
