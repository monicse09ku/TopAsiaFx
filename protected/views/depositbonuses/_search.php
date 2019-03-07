<?php
/* @var $this DepositBonusesController */
/* @var $model DepositBonuses */
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
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'details'); ?>
		<?php echo $form->textArea($model,'details',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_rating'); ?>
		<?php echo $form->textField($model,'total_rating'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_rater'); ?>
		<?php echo $form->textField($model,'total_rater'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'average_rating'); ?>
		<?php echo $form->textField($model,'average_rating',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'available_till'); ?>
		<?php echo $form->textField($model,'available_till'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_comments'); ?>
		<?php echo $form->textField($model,'total_comments'); ?>
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