<?php
/* @var $this NoDepositBonusesController */
/* @var $model NoDepositBonuses */

$this->breadcrumbs=array(
	'No Deposit Bonuses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List NoDepositBonuses', 'url'=>array('index')),
	array('label'=>'Create NoDepositBonuses', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#no-deposit-bonuses-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage No Deposit Bonuses</h1>

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
	'id'=>'no-deposit-bonuses-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'url',
		'image',
		'details',
		'status',
		'total_rating',
		'total_rater',
		/*
		'average_rating',
		'available_till',
		'total_comments',
		'create_date',
		'update_date',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
