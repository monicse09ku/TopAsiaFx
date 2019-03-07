<?php
/* @var $this BrokersController */
/* @var $model Brokers */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'broker_title'); ?>
		<?php echo $form->textField($model,'broker_title',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'h1'); ?>
		<?php echo $form->textField($model,'h1',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'meta_title'); ?>
		<?php echo $form->textField($model,'meta_title',array('size'=>60,'maxlength'=>200)); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'meta_description'); ?>
		<?php echo $form->textArea($model,'meta_description',array('rows'=>6, 'cols'=>50)); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'broker_url'); ?>
		<?php echo $form->textField($model,'broker_url',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'broker_image'); ?>
		<?php echo $form->textField($model,'broker_image',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bonus_title'); ?>
		<?php echo $form->textField($model,'bonus_title',array('size'=>60,'maxlength'=>2000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bonus_desc'); ?>
		<?php echo $form->textField($model,'bonus_desc',array('size'=>60,'maxlength'=>2000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'min_deposit'); ?>
		<?php echo $form->textField($model,'min_deposit',array('size'=>60,'maxlength'=>2000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'education'); ?>
		<?php echo $form->textField($model,'education',array('size'=>60,'maxlength'=>2000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spreads_from'); ?>
		<?php echo $form->textArea($model,'spreads_from',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_score'); ?>
		<?php echo $form->textField($model,'user_score'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'max_leverage'); ?>
		<?php echo $form->textArea($model,'max_leverage',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'regulation'); ?>
		<?php echo $form->textArea($model,'regulation',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'review_title'); ?>
		<?php echo $form->textField($model,'review_title',array('size'=>60,'maxlength'=>2000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pros'); ?>
		<?php echo $form->textField($model,'pros',array('size'=>60,'maxlength'=>2000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cons'); ?>
		<?php echo $form->textField($model,'cons',array('size'=>60,'maxlength'=>2000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'score'); ?>
		<?php echo $form->textField($model,'score'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'site_address'); ?>
		<?php echo $form->textField($model,'site_address',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'broker_short_desc'); ?>
		<?php echo $form->textField($model,'broker_short_desc',array('size'=>60,'maxlength'=>2000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'broker_detail_desc'); ?>
		<?php echo $form->textField($model,'broker_detail_desc',array('size'=>60,'maxlength'=>20000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telephone'); ?>
		<?php echo $form->textArea($model,'telephone',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pairs_offered'); ?>
		<?php echo $form->textField($model,'pairs_offered',array('size'=>60,'maxlength'=>3000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'markets'); ?>
		<?php echo $form->textField($model,'markets',array('size'=>60,'maxlength'=>3000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deposit_options'); ?>
		<?php echo $form->textField($model,'deposit_options',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_rating'); ?>
		<?php echo $form->textField($model,'total_rating'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_rating_user'); ?>
		<?php echo $form->textField($model,'total_rating_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_date'); ?>
		<?php echo $form->textField($model,'update_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->