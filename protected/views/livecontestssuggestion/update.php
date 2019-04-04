<?php
/* @var $this LivecontestssuggestionController */
/* @var $model LiveContestsSuggestion */

$this->breadcrumbs=array(
	'Live Contests Suggestions'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Live Contests Suggestions', 'url'=>array('index')),
	array('label'=>'Create Live Contests Suggestions', 'url'=>array('create')),
	array('label'=>'View Live Contests Suggestions', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Live Contests Suggestions', 'url'=>array('admin')),
);
?>

<h1>Update Live Contests Suggestions <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>