<?php
/* @var $this NoDepositBonusSuggestionsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'No Deposit Bonus Suggestions',
);

$this->menu=array(
	array('label'=>'Create NoDepositBonusSuggestions', 'url'=>array('create')),
	array('label'=>'Manage NoDepositBonusSuggestions', 'url'=>array('admin')),
);
?>

<h1>No Deposit Bonus Suggestions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
