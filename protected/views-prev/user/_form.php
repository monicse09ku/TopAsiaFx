<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<div class="col-md-8">
    <div class="form box box-primary">
        <div class="box-body">

			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'user-form',
				// Please note: When you enable ajax validation, make sure the corresponding
				// controller action is handling ajax validation correctly.
				// There is a call to performAjaxValidation() commented in generated controller code.
				// See class documentation of CActiveForm for details on this.
				'enableAjaxValidation'=>false,
			)); ?>

				<p class="note">Fields with <span class="required">*</span> are required.</p>

				<?php echo $form->errorSummary($model); ?>

				<div class="form-group">
					<?php echo $form->labelEx($model,'username'); ?>
					<?php echo $form->textField($model,'username', array ('class' => 'form-control')); ?>
					<?php echo $form->error($model,'username'); ?>
				</div>

				<div class="form-group">
					<?php echo $form->labelEx($model,'password'); ?>
					<?php echo $form->passwordField($model,'password', array ('class' => 'form-control', 'id' => 'password')); ?>
					<?php echo $form->error($model,'password'); ?>
				</div>

				<div class="form-group">
					<?php echo $form->labelEx($model,'date_of_birth'); ?>
					<?php echo $form->textField($model,'date_of_birth', array ('class' => 'form-control', 'id' => 'datepicker')); ?>
					<?php echo $form->error($model,'date_of_birth'); ?>
				</div>

				<div class="form-group">
					<?php echo $form->labelEx($model,'role'); ?>
					<?php echo $form->textField($model,'role', array ('class' => 'form-control')); ?>
					<?php echo $form->error($model,'role'); ?>
				</div>

				<!-- <div class="form-group">
					<?php echo $form->labelEx($model,'create_date'); ?>
					<?php echo $form->textField($model,'create_date', array ('class' => 'form-control')); ?>
					<?php echo $form->error($model,'create_date'); ?>
				</div>

				<div class="form-group">
					<?php echo $form->labelEx($model,'update_date'); ?>
					<?php echo $form->textField($model,'update_date', array ('class' => 'form-control')); ?>
					<?php echo $form->error($model,'update_date'); ?>
				</div> -->

				<div class="form-group">
					<?php echo $form->labelEx($model,'email'); ?>
					<?php echo $form->textField($model,'email', array ('class' => 'form-control')); ?>
					<?php echo $form->error($model,'email'); ?>
				</div>

				<div class="form-group buttons">
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
				</div>

			<?php $this->endWidget(); ?>

		</div>
    </div>
</div>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
$( function() {
	$( "#datepicker" ).datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'yy-mm-dd',
		yearRange: '1970:2020'
	});
} );

$( document ).ready(function() {
	$('#password').val('');
});
</script>