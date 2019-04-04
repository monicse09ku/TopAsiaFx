<?php
/* @var $this DemocontestssuggestionController */
/* @var $model DemoContestsSuggestion */

$this->breadcrumbs=array(
	'Demo Contests Suggestions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Demo Contests Suggestions', 'url'=>array('index')),
	array('label'=>'Manage Demo Contests Suggestions', 'url'=>array('admin')),
);
?>

<h1>Create Demo Contests Suggestions</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>