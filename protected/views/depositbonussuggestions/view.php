<?php
/* @var $this DepositBonusSuggestionsController */
/* @var $model DepositBonusSuggestions */

$this->breadcrumbs=array(
	'Deposit Bonus Suggestions'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List DepositBonusSuggestions', 'url'=>array('index')),
	array('label'=>'Create DepositBonusSuggestions', 'url'=>array('create')),
	array('label'=>'Update DepositBonusSuggestions', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DepositBonusSuggestions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DepositBonusSuggestions', 'url'=>array('admin')),
);
?>

<h1>View DepositBonusSuggestions #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'suggestion',
		'approved',
		'create_date',
		'update_date',
	),
)); ?>
