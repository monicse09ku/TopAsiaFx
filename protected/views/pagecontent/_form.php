<?php
/* @var $this PageContentController */
/* @var $model PageContents */
/* @var $form CActiveForm */
?>
<div class="col-md-8">
    <div class="form box box-primary">
        <div class="box-body">

			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'page-contents-form',
				// Please note: When you enable ajax validation, make sure the corresponding
				// controller action is handling ajax validation correctly.
				// There is a call to performAjaxValidation() commented in generated controller code.
				// See class documentation of CActiveForm for details on this.
				'enableAjaxValidation'=>false,
			)); ?>

				<p class="note">Fields with <span class="required">*</span> are required.</p>

				<?php echo $form->errorSummary($model); ?>

				<div class="form-group">
					<?php echo $form->labelEx($model,'url'); ?>
					<?php echo $form->dropDownList($model, 'url', EWebUser::getPageUrls(),array('empty'=>'Select Page','class' => 'form-control'));
					?>
					<?php echo $form->error($model,'url'); ?>
				</div>
				
				<a target="blank" href="https://www.base64-image.de/" class="btn btn-primary">Get The Image Code</a>
				<a target="blank" href="https://compressor.io/" class="btn btn-primary pull-right">Compress Image? (Recommended)</a>
				
				<div class="form-group">
					<?php echo $form->labelEx($model,'top_content'); ?>
					<?php echo $form->textArea($model,'top_content', array ('class' => 'form-control', 'id' => 'test1')); ?>
					<?php echo $form->error($model,'top_content'); ?>
				</div>

				<div class="form-group">
					<?php echo $form->labelEx($model,'bottom_content'); ?>
					<?php echo $form->textArea($model,'bottom_content', array ('class' => 'form-control', 'id' => 'test2')); ?>
					<?php echo $form->error($model,'bottom_content'); ?>
				</div>

				<div class="form-group buttons">
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
				</div>

				<?php $this->widget('application.extensions.tinymce.SladekTinyMce'); ?>

				<script type="text/javascript">
				 
				    tinymce.init({
					    selector: "#test1",
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

				    tinymce.init({
					    selector: "#test2",
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