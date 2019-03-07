<?php
/* @var $this UsersReviewController */
/* @var $model UsersReview */
/* @var $form CActiveForm */
?>


<div class="col-md-12">
    <div class="form box box-primary">
        <div class="box-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-review-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group col-md-3">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="form-group col-md-3">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model,'country', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>

	<div class="form-group col-md-3">
		<?php echo $form->labelEx($model,'user_email'); ?>
		<?php echo $form->textField($model,'user_email', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'user_email'); ?>
	</div>

	<div class="form-group col-md-3">
		<?php echo $form->labelEx($model,'cell_no'); ?>
		<?php echo $form->textField($model,'cell_no', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'cell_no'); ?>
	</div>

	<div class="form-group col-md-3">
		<?php echo $form->labelEx($model,'approved'); ?>
		<?php echo $form->dropDownList($model, 'approved', EWebUser::getApproved(),array('empty'=>'Approve Comment?','class' => 'form-control'));
		?>
		<?php echo $form->error($model,'approved'); ?>
	</div>

	<div class="form-group col-md-3">
		<?php echo $form->labelEx($model,'broker_id'); ?>
		<?php echo $form->textField($model,'broker_id', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'broker_id'); ?>
	</div>

	<div class="form-group col-md-3">
		<?php echo $form->labelEx($model,'score'); ?>
		<?php echo $form->textField($model,'score', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'score'); ?>
	</div>
	
	<div class="form-group col-md-3">
		<?php echo $form->labelEx($model,'priority'); ?>
		<?php echo $form->textField($model,'priority', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'priority'); ?>
	</div>

	<div class="form-group col-md-12">
		<?php echo $form->labelEx($model,'comment'); ?>
		<?php echo $form->textArea($model,'comment', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'comment'); ?>
	</div>

	<div class="form-group col-md-12 buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

		</div>
    </div>
</div>