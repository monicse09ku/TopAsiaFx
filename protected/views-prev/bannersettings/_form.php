<?php
/* @var $this BannerSettingsController */
/* @var $model BannerSettings */
/* @var $form CActiveForm */
?>

<div class="col-md-8">
    <div class="form box box-primary">
        <div class="box-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'banner-settings-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'position'); ?>
		<?php echo $form->dropDownList($model, 'position', EWebUser::selectBannerPosition(),array('empty'=>'Select Banner Position','class' => 'form-control'));
		?>
		<?php echo $form->error($model,'position'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'code'); ?>
		<?php echo $form->textArea($model,'code', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'code'); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

		</div>
    </div>
</div>