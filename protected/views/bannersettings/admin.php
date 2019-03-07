<?php
/* @var $this BannerSettingsController */
/* @var $model BannerSettings */

$this->breadcrumbs=array(
	'Banner Settings'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List BannerSettings', 'url'=>array('index')),
	array('label'=>'Create BannerSettings', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#banner-settings-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<style type="text/css">
	.word-break{
		word-break: break-all;
	}
</style>

<h1>Manage Banner Settings</h1>

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
	'id'=>'banner-settings-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array(
			'value' => 'EWebUser::getBannerPosition($data->position)',
			'name' => 'position'
		),
		array(
            'name' => 'code',
            'value' => '$data->code',
            'htmlOptions' => array('class' => 'word-break'),
        ),
		'create_date',		
		'update_date',		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
