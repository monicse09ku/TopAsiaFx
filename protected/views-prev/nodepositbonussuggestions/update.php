<?php
/* @var $this NoDepositBonusSuggestionsController */
/* @var $model NoDepositBonusSuggestions */

$this->breadcrumbs=array(
	'No Deposit Bonus Suggestions'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List NoDepositBonusSuggestions', 'url'=>array('index')),
	array('label'=>'Create NoDepositBonusSuggestions', 'url'=>array('create')),
	array('label'=>'View NoDepositBonusSuggestions', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage NoDepositBonusSuggestions', 'url'=>array('admin')),
);
?>

<h1>Update NoDepositBonusSuggestions <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>