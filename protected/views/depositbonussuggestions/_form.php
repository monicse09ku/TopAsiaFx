<?php
/* @var $this DepositBonusSuggestionsController */
/* @var $model DepositBonusSuggestions */
/* @var $form CActiveForm */
?>

<div class="col-md-8">
    <div class="form box box-primary">
        <div class="box-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'deposit-bonus-suggestions-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'suggestion'); ?>
		<?php echo $form->textArea($model,'suggestion', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'suggestion'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'approved'); ?>
		<?php echo $form->dropDownList($model, 'approved', EWebUser::getApproved(),array('empty'=>'Approve Comment?','class' => 'form-control'));
		?>
		<?php echo $form->error($model,'approved'); ?>
	</div>

	<!-- <div class="form-group">
		<?php echo $form->labelEx($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
		<?php echo $form->error($model,'create_date'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'update_date'); ?>
		<?php echo $form->textField($model,'update_date'); ?>
		<?php echo $form->error($model,'update_date'); ?>
	</div> -->

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>


</div>
    </div>
</div>