<?php
/* @var $this PostsreviewController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Posts Reviews',
);

$this->menu=array(
	array('label'=>'Create PostsReview', 'url'=>array('create')),
	array('label'=>'Manage PostsReview', 'url'=>array('admin')),
);
?>

<h1>Posts Reviews</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
