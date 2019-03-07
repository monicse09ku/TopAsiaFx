<?php
/* @var $this NoDepositBonusSuggestionsController */
/* @var $model NoDepositBonusSuggestions */

$this->breadcrumbs=array(
	'No Deposit Bonus Suggestions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NoDepositBonusSuggestions', 'url'=>array('index')),
	array('label'=>'Manage NoDepositBonusSuggestions', 'url'=>array('admin')),
);
?>

<h1>Create NoDepositBonusSuggestions</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>