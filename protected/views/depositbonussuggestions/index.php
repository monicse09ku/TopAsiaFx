<?php
/* @var $this DepositBonusSuggestionsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Deposit Bonus Suggestions',
);

$this->menu=array(
	array('label'=>'Create DepositBonusSuggestions', 'url'=>array('create')),
	array('label'=>'Manage DepositBonusSuggestions', 'url'=>array('admin')),
);
?>

<h1>Deposit Bonus Suggestions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
