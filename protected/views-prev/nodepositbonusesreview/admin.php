<?php
/* @var $this NoDepositBonusesReviewController */
/* @var $model NoDepositBonusesReview */

$this->breadcrumbs=array(
	'No Deposit Bonuses Reviews'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List NoDepositBonusesReview', 'url'=>array('index')),
	array('label'=>'Create NoDepositBonusesReview', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#no-deposit-bonuses-review-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage No Deposit Bonuses Reviews</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'no-deposit-bonuses-review-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'no_deposit_bonuses_id',
		'name',
		'country',
		'user_email',
		'comment',
		/*
		'approved',
		'score',
		'priority',
		'create_date',
		'update_date',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
