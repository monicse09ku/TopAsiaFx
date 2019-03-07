<?php
/* @var $this DepositBonusSuggestionsController */
/* @var $model DepositBonusSuggestions */

$this->breadcrumbs=array(
	'Deposit Bonus Suggestions'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DepositBonusSuggestions', 'url'=>array('index')),
	array('label'=>'Create DepositBonusSuggestions', 'url'=>array('create')),
	array('label'=>'View DepositBonusSuggestions', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DepositBonusSuggestions', 'url'=>array('admin')),
);
?>

<h1>Update DepositBonusSuggestions <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>