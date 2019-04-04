<?php
/* @var $this LivecontestssuggestionController */
/* @var $model LiveContestsSuggestion */

$this->breadcrumbs=array(
	'Live Contests Suggestions',
);

$this->menu=array(
	array('label'=>'Create Live Contests Suggestions', 'url'=>array('create')),
	array('label'=>'Manage Live Contests Suggestions', 'url'=>array('admin')),
);
?>

<h1>Live Contests Suggestions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
