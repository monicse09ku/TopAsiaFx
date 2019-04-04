<?php
/* @var $this DemoContestsReviewController */
/* @var $model DemoContestsReview */

$this->breadcrumbs=array(
	'Demo Contests Reviews',
);

$this->menu=array(
	array('label'=>'Create DemoContestsReview', 'url'=>array('create')),
	array('label'=>'Manage DemoContestsReview', 'url'=>array('admin')),
);
?>

<h1>Demo Contests Reviews</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
