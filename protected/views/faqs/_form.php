<?php
/* @var $this FaqsController */
/* @var $model Faqs */
/* @var $form CActiveForm */
?>

<div class="col-md-8">
    <div class="form box box-primary">
        <div class="box-body">

			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'faqs-form',
				// Please note: When you enable ajax validation, make sure the corresponding
				// controller action is handling ajax validation correctly.
				// There is a call to performAjaxValidation() commented in generated controller code.
				// See class documentation of CActiveForm for details on this.
				'enableAjaxValidation'=>false,
			)); ?>

				<p class="note">Fields with <span class="required">*</span> are required.</p>

				<?php echo $form->errorSummary($model); ?>

				<div class="form-group">
					<?php echo $form->labelEx($model,'page'); ?>
					<?php echo $form->dropDownList($model, 'page', EWebUser::getFaqsPages(),array('empty'=>'Select Status','class' => 'form-control'));
					?>
					<?php echo $form->error($model,'page'); ?>
				</div>

				<div class="form-group">
					<?php echo $form->labelEx($model,'title'); ?>
					<?php echo $form->textArea($model,'title', array ('class' => 'form-control')); ?>
					<?php echo $form->error($model,'title'); ?>
				</div>

				<div class="form-group">
					<?php echo $form->labelEx($model,'description'); ?>
					<?php echo $form->textArea($model,'description', array ('class' => 'form-control', 'id' => 'test')); ?>
					<?php echo $form->error($model,'description'); ?>
				</div>

				<div class="form-group buttons">
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
				</div>

				<?php $this->widget('application.extensions.tinymce.SladekTinyMce'); ?>
 
				<script type="text/javascript">
				 
				    tinymce.init({
					    selector: "#test",
					    theme: "modern",
					    //width: 900,
					    height: 300,
					    plugins: [
					         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
					         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
					         "save table contextmenu directionality emoticons template paste textcolor"
					   ],
					   content_css: "css/content.css",
					   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons", 
					   block_formats: 'Paragraph=p;Header 1=h1;Header 2=h2;Header 3=h3',
					  
					}); 

				 </script>

			<?php $this->endWidget(); ?>

		</div>
    </div>
</div>