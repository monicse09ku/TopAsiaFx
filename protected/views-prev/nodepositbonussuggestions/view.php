<?php
/* @var $this NoDepositBonusSuggestionsController */
/* @var $model NoDepositBonusSuggestions */

$this->breadcrumbs=array(
	'No Deposit Bonus Suggestions'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List NoDepositBonusSuggestions', 'url'=>array('index')),
	array('label'=>'Create NoDepositBonusSuggestions', 'url'=>array('create')),
	array('label'=>'Update NoDepositBonusSuggestions', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete NoDepositBonusSuggestions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NoDepositBonusSuggestions', 'url'=>array('admin')),
);
?>

<h1>View NoDepositBonusSuggestions #<?php echo $model->id; ?></h1>

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
