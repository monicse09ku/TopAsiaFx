<?php
/* @var $this BrokersController */
/* @var $model Brokers */

$this->breadcrumbs=array(
	'Brokers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Brokers', 'url'=>array('index')),
	array('label'=>'Create Brokers', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#brokers-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Brokers</h1>

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
	'id'=>'brokers-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'broker_title',
		'broker_url',
		'broker_image',
		'bonus_title',
		'bonus_desc',
		'min_deposit',
		/*
		'spreads_from',
		'user_score',
		'max_leverage',
		'regulation',
		'review_title',
		'pros',
		'cons',
		'score',
		'site_address',
		'broker_short_desc',
		'broker_detail_desc',
		'telephone',
		'pairs_offered',
		'markets',
		'deposit_options',
		'education',
		'total_rating',
		'total_rating_user',
		'create_date',
		'update_date',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
