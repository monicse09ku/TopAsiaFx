<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p>


<div class="col-md-8">

	<div class="form box box-primary">
		<div class="box-body">

			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'login-form',
				'enableClientValidation'=>true,
				'clientOptions'=>array(
					'validateOnSubmit'=>true,
				),
			)); ?>

			<p class="note">Fields with <span class="required">*</span> are required.</p>

			<div class="form-group">
				<?php echo $form->labelEx($model,'username'); ?>
				<?php echo $form->textField($model,'username', array ('class' => 'form-control')); ?>
				<?php echo $form->error($model,'username'); ?>
			</div>

			<div class="form-group">
				<?php echo $form->labelEx($model,'password'); ?>
				<?php echo $form->passwordField($model,'password', array ('class' => 'form-control')); ?>
				<?php echo $form->error($model,'password'); ?>
			</div>

			<!-- <div class="row rememberMe">
				<?php echo $form->checkBox($model,'rememberMe'); ?>
				<?php echo $form->label($model,'rememberMe'); ?>
				<?php echo $form->error($model,'rememberMe'); ?>
			</div> -->

			<div class="form-group buttons">
				<?php echo CHtml::submitButton('Login'); ?>
			</div>

			<?php $this->endWidget(); ?>

		</div><!-- form -->
	</div><!-- form -->
</div><!-- col-md-6 -->
