<?php
/* @var $this DemoContestsReviewController */
/* @var $model DemoContestsReview */

$this->breadcrumbs=array(
	'Demo Contests Suggestions',
);

$this->menu=array(
	array('label'=>'Create Demo Contests Suggestions', 'url'=>array('create')),
	array('label'=>'Manage Demo Contests Suggestions', 'url'=>array('admin')),
);
?>

<h1>Demo Contests Suggestions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
