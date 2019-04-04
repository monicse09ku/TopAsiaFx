<?php
/* @var $this LiveContestsReviewController */
/* @var $model LiveContestsReview */

$this->breadcrumbs=array(
	'Live Contests Reviews',
);

$this->menu=array(
	array('label'=>'Create LiveContestsReview', 'url'=>array('create')),
	array('label'=>'Manage LiveContestsReview', 'url'=>array('admin')),
);
?>

<h1>Live Contests Reviews</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
