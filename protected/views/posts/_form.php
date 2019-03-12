<?php
/* @var $this PostsController */
/* @var $model Posts */
/* @var $form CActiveForm */
//print "<pre>";
//print_r($categories);exit();
?>
<style type="text/css">
	.ultraselectWrapper{
		height: 30px !important;
		width: 100%;
	}
</style>
<div class="col-md-12">
    <div class="form box box-primary">
        <div class="box-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'posts-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<input type="hidden" name="Posts[categories]" id="post_categories" value="">
	<div class="form-group col-md-6">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="form-group col-md-6">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="form-group col-md-6">
		<label for="status" class="required">Status <span class="required">*</span></label><br/>
		<select name="status" class="form-control">
			<option value="">Select Status</option>
			<option value="active" <?php if(!empty($model->status) && $model->status == 'active'){ echo "selected";}?>>Active</option>
			<option value="pending" <?php if(!empty($model->status) && $model->status == 'pending'){ echo "selected";}?>>Pending</option>
			<option value="inactive" <?php if(!empty($model->status) && $model->status == 'inactive'){ echo "selected";}?>>InActive</option>
		</select>
	</div>

	<div class="form-group col-md-6" style="z-index: 9999;">
		<label for="Posts_url" class="required">Select Categories <span class="required">*</span></label><br/>
		<select class="ultraSelect form-control" id="mySelect1" name="myOptions1[]" multiple="multiple" size="5">
			<?php foreach($categories as $category){?>
		    <option value="<?php echo $category['id']?>"><?php echo $category['name']?></option>
			<?php }?>
		</select>
	</div>

	<div class="form-group col-md-6">
		<label>Upload Featured Image</label>
		<input type="file" name="thumbnail" accept="image/*" class="form-control">
	</div>

	<div class="form-group col-md-12">
		<?php echo $form->labelEx($model,'meta_title'); ?>
		<?php echo $form->textField($model,'meta_title', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'meta_title'); ?>
	</div>

	<div class="form-group col-md-12">
		<?php echo $form->labelEx($model,'meta_description'); ?>
		<?php echo $form->textArea($model,'meta_description', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'meta_description'); ?>
	</div>

	<div class="form-group col-md-12">
		<?php echo $form->labelEx($model,'short_description'); ?>
		<?php echo $form->textArea($model,'short_description', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'short_description'); ?>
	</div>

	<div class="form-group col-md-12">
		<?php echo $form->labelEx($model,'keywords'); ?>
		<?php echo $form->textArea($model,'keywords', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'keywords'); ?>
	</div>
	
	<div class="col-md-12">
	    <a target="blank" href="https://www.base64-image.de/" class="btn btn-primary">Get The Image Code</a>
	    <a target="blank" href="https://compressor.io/" class="btn btn-primary pull-right">Compress Image? (Recommended)</a>
		<div class="form-group">
			<?php echo $form->labelEx($model,'description'); ?>
			<?php echo $form->textArea($model,'description', array ('class' => 'form-control', 'id' => 'test')); ?>
			<?php echo $form->error($model,'description'); ?>
		</div>
	</div>

	<div class="form-group col-md-12 buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

	<?php $this->widget('application.extensions.tinymce.SladekTinyMce'); ?>
 
	<script type="text/javascript">

		$("#mySelect1").ultraselect({oneOrMoreSelected: "*", selectAllText: "Pick &lsquo;em all!"});

	    $('.ultraSelect').change(function(){
	      $("#post_categories").val($( ".ultraSelect" ).val());
	    })
	 
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