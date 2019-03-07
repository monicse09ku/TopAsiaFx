<?php
/* @var $this DepositBonusSuggestionsController */
/* @var $model DepositBonusSuggestions */

$this->breadcrumbs=array(
	'Deposit Bonus Suggestions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DepositBonusSuggestions', 'url'=>array('index')),
	array('label'=>'Manage DepositBonusSuggestions', 'url'=>array('admin')),
);
?>

<h1>Create DepositBonusSuggestions</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>