<?php
/* @var $this LivecontestssuggestionController */
/* @var $model LiveContestsSuggestion */

$this->breadcrumbs=array(
	'Live Contests Suggestions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Live Contests Suggestions', 'url'=>array('index')),
	array('label'=>'Manage Live Contests Suggestions', 'url'=>array('admin')),
);
?>

<h1>Create Live Contests Suggestions</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>