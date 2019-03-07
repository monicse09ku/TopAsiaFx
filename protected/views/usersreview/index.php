<?php
/* @var $this UsersReviewController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users Reviews',
);

$this->menu=array(
	array('label'=>'Create UsersReview', 'url'=>array('create')),
	array('label'=>'Manage UsersReview', 'url'=>array('admin')),
);
?>

<h1>Users Reviews</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
