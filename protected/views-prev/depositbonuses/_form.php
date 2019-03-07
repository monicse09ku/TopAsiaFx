<?php
/* @var $this DepositBonusesController */
/* @var $model DepositBonuses */
/* @var $form CActiveForm */
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<div class="col-md-8">
    <div class="form box box-primary">
        <div class="box-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'deposit-bonuses-form',
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
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title', array ('class' => 'form-control', 'id' => 'deposit-bonuses-title')); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url', array ('class' => 'form-control', 'id' => 'deposit-bonuses-url')); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="form-group">
		<label>Upload Image</label>
		<input type="file" name="image" accept="image/*" class="form-control">
	</div>
	
    <a target="blank" href="https://www.base64-image.de/">Get The Image Code</a>
	<div class="form-group">
		<?php echo $form->labelEx($model,'details'); ?>
		<?php echo $form->textArea($model,'details', array ('class' => 'form-control', 'id' => 'test')); ?>
		<?php echo $form->error($model,'details'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model, 'status', EWebUser::getApproved(),array('empty'=>'Select Status','class' => 'form-control'));
		?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'total_rating'); ?>
		<?php echo $form->textField($model,'total_rating', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'total_rating'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'total_rater'); ?>
		<?php echo $form->textField($model,'total_rater', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'total_rater'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'average_rating'); ?>
		<?php echo $form->textField($model,'average_rating', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'average_rating'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'available_till'); ?>
		<?php echo $form->textField($model,'available_till', array ('class' => 'form-control', 'id' => 'datepicker')); ?>
		<?php echo $form->error($model,'available_till'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'total_comments'); ?>
		<?php echo $form->textField($model,'total_comments', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'total_comments'); ?>
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

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<?php $this->widget('application.extensions.tinymce.SladekTinyMce'); ?>
 
<script type="text/javascript">
	$( function() {
		$( "#datepicker" ).datepicker({
			changeMonth: true,
			changeYear: true,
			dateFormat: 'yy-mm-dd',
			//yearRange: '1970:2020'
		});
	} );

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
	   /*style_formats: [
	        {title: 'Bold text', inline: 'b'},
	        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
	        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
	        {title: 'Example 1', inline: 'span', classes: 'example1'},
	        {title: 'Example 2', inline: 'span', classes: 'example2'},
	        {title: 'Table styles'},
	        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
	    ]*/
	 });


 	$( "#deposit-bonuses-title" ).keyup(function() {
    	var permalink = '';
        var title = $("#deposit-bonuses-title").val();

        if(title.length > 0){
            permalink = editPermalink(title);
        }
        //alert(permalink);
        $("#deposit-bonuses-url").val(permalink);
        $("#deposit-bonuses-url").html(permalink);
    });

    function editPermalink(perma) {
        perma = $.trim(perma);
        return perma.toLowerCase().replace(/[^a-z 0-9]/g,' ').replace(/[ ][ ]*/g, '-');
    }

 </script>

		</div>
    </div>
</div>