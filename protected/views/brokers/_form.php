<?php
/* @var $this BrokersController */
/* @var $model Brokers */
/* @var $form CActiveForm */
?>


<div class="col-md-12">
    <div class="form box box-primary">
        <div class="box-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'brokers-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group col-md-4">
		<?php echo $form->labelEx($model,'broker_title'); ?>
		<?php echo $form->textField($model,'broker_title', array ('class' => 'form-control', 'id' => 'broker-title')); ?>
		<?php echo $form->error($model,'broker_title'); ?>
	</div>

	<div class="form-group col-md-4">
		<?php echo $form->labelEx($model,'broker_url'); ?>
		<?php echo $form->textField($model,'broker_url', array ('class' => 'form-control', 'id' => 'broker-url')); ?>
		<?php echo $form->error($model,'broker_url'); ?>
	</div>

	<div class="form-group col-md-4">
		<label>Upload Image</label>
		<input type="file" name="broker_image" accept="image/*" class="form-control">
	</div>

	<div class="form-group col-md-6">
		<?php echo $form->labelEx($model,'h1'); ?>
		<?php echo $form->textField($model,'h1', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'h1'); ?>
	</div>

	<div class="form-group col-md-6">
		<?php echo $form->labelEx($model,'meta_title'); ?>
		<?php echo $form->textField($model,'meta_title', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'meta_title'); ?>
	</div>

	<div class="form-group col-md-12">
		<?php echo $form->labelEx($model,'meta_description'); ?>
		<?php echo $form->textArea($model,'meta_description', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'meta_description'); ?>
	</div>

	<div class="form-group col-md-3">
		<?php echo $form->labelEx($model,'bonus_title'); ?>
		<?php echo $form->textField($model,'bonus_title', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'bonus_title'); ?>
	</div>

	<div class="form-group col-md-3">
		<?php echo $form->labelEx($model,'bonus_desc'); ?>
		<?php echo $form->textField($model,'bonus_desc', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'bonus_desc'); ?>
	</div>

	<div class="form-group col-md-3">
		<?php echo $form->labelEx($model,'min_deposit'); ?>
		<?php echo $form->textField($model,'min_deposit', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'min_deposit'); ?>
	</div>

	<div class="form-group col-md-3">
		<?php echo $form->labelEx($model,'spreads_from'); ?>
		<?php echo $form->textField($model,'spreads_from', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'spreads_from'); ?>
	</div>

	<div class="form-group col-md-3">
		<?php echo $form->labelEx($model,'user_score'); ?>
		<?php echo $form->textField($model,'user_score', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'user_score'); ?>
	</div>

	<div class="form-group col-md-3">
		<?php echo $form->labelEx($model,'max_leverage'); ?>
		<?php echo $form->textField($model,'max_leverage', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'max_leverage'); ?>
	</div>

	<div class="form-group col-md-3">
		<?php echo $form->labelEx($model,'regulation'); ?>
		<?php echo $form->textField($model,'regulation', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'regulation'); ?>
	</div>

	<div class="form-group col-md-3">
		<?php echo $form->labelEx($model,'score'); ?>
		<?php echo $form->textField($model,'score', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'score'); ?>
	</div>

	<div class="form-group col-md-3">
		<?php echo $form->labelEx($model,'site_address'); ?>
		<?php echo $form->textField($model,'site_address', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'site_address'); ?>
	</div>

	<div class="form-group col-md-3">
		<?php echo $form->labelEx($model,'telephone'); ?>
		<?php echo $form->textField($model,'telephone', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'telephone'); ?>
	</div>

	<div class="form-group col-md-3">
		<?php echo $form->labelEx($model,'pairs_offered'); ?>
		<?php echo $form->textField($model,'pairs_offered', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'pairs_offered'); ?>
	</div>

	<div class="form-group col-md-3">
		<?php echo $form->labelEx($model,'education'); ?>
		<?php echo $form->textField($model,'education', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'education'); ?>
	</div>

	<div class="form-group col-md-12">
		<?php echo $form->labelEx($model,'review_title'); ?>
		<?php echo $form->textArea($model,'review_title', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'review_title'); ?>
	</div>

	<div class="form-group col-md-6">
		<?php echo $form->labelEx($model,'pros'); ?>
		<?php echo $form->textArea($model,'pros', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'pros'); ?>
	</div>

	<div class="form-group col-md-6">
		<?php echo $form->labelEx($model,'cons'); ?>
		<?php echo $form->textArea($model,'cons', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'cons'); ?>
	</div>

	<div class="form-group col-md-12">
		<?php echo $form->labelEx($model,'broker_short_desc'); ?>
		<?php echo $form->textArea($model,'broker_short_desc', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'broker_short_desc'); ?>
	</div>
	
	<div class="col-md-12">
		<a target="blank" href="https://www.base64-image.de/" class="btn btn-primary">Get The Image Code</a>
		<a target="blank" href="https://compressor.io/" class="btn btn-primary pull-right">Compress Image? (Recommended)</a>
		<div class="form-group">
			<?php echo $form->labelEx($model,'broker_detail_desc'); ?>
			<?php echo $form->textField($model,'broker_detail_desc', array ('class' => 'form-control', 'id' => 'test')); ?>
			<?php echo $form->error($model,'broker_detail_desc'); ?>
		</div>
	</div>

	<div class="form-group col-md-4">
		<?php echo $form->labelEx($model,'markets'); ?>
		<?php echo $form->textField($model,'markets', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'markets'); ?>
	</div>

	<div class="form-group col-md-4">
		<?php echo $form->labelEx($model,'total_rating'); ?>
		<?php echo $form->textField($model,'total_rating', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'total_rating'); ?>
	</div>

	<div class="form-group col-md-4">
		<?php echo $form->labelEx($model,'total_rating_user'); ?>
		<?php echo $form->textField($model,'total_rating_user', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'total_rating_user'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'deposit_options'); ?>

		<br/>

		<div class="col-md-2">
			<input type="checkbox" name="deposit_options[]" value="cashu" <?php if(strpos($model->deposit_options, 'cashu') !== false){echo "checked";}?> > 
			<img class="deposit-options-image" src="<?php echo Yii::app()->getBaseUrl(true);?>/images/deposit_options/cashu.png"> 
		</div>

		<div class="col-md-2">
	  		<input type="checkbox" name="deposit_options[]" value="unionpay" <?php if(strpos($model->deposit_options, 'unionpay') !== false){echo "checked";}?> > 
	  		<img class="deposit-options-image" src="<?php echo Yii::app()->getBaseUrl(true);?>/images/deposit_options/unionpay.png">
	  	</div>

		<div class="col-md-2">
	  		<input type="checkbox" name="deposit_options[]" value="debit" <?php if(strpos($model->deposit_options, 'debit') !== false){echo "checked";}?> > 
  			<img class="deposit-options-image" src="<?php echo Yii::app()->getBaseUrl(true);?>/images/deposit_options/debit.png"> 
	  	</div>	 

		<div class="col-md-2">
	  		<input type="checkbox" name="deposit_options[]" value="giropay" <?php if(strpos($model->deposit_options, 'giropay') !== false){echo "checked";}?> > 
  			<img class="deposit-options-image" src="<?php echo Yii::app()->getBaseUrl(true);?>/images/deposit_options/giropay.png"> 
	  	</div>	

		<div class="col-md-2">
	  		<input type="checkbox" name="deposit_options[]" value="mastercard" <?php if(strpos($model->deposit_options, 'mastercard') !== false){echo "checked";}?> > 
  			<img class="deposit-options-image" src="<?php echo Yii::app()->getBaseUrl(true);?>/images/deposit_options/mastercard.png">  
	  	</div>	

		<div class="col-md-2">
	  		<input type="checkbox" name="deposit_options[]" value="neteller" <?php if(strpos($model->deposit_options, 'neteller') !== false){echo "checked";}?> > 
  			<img class="deposit-options-image" src="<?php echo Yii::app()->getBaseUrl(true);?>/images/deposit_options/neteller.png">  
	  	</div>	

		<div class="col-md-2">
	  		<input type="checkbox" name="deposit_options[]" value="paypal" <?php if(strpos($model->deposit_options, 'paypal') !== false){echo "checked";}?> > 
  			<img class="deposit-options-image" src="<?php echo Yii::app()->getBaseUrl(true);?>/images/deposit_options/paypal.png"> 
	  	</div>

		<div class="col-md-2">
	  		<input type="checkbox" name="deposit_options[]" value="skrill" <?php if(strpos($model->deposit_options, 'skrill') !== false){echo "checked";}?> > 
  			<img class="deposit-options-image" src="<?php echo Yii::app()->getBaseUrl(true);?>/images/deposit_options/skrill.png"> 
	  	</div>	 

		<div class="col-md-2">
	  		<input type="checkbox" name="deposit_options[]" value="sofort" <?php if(strpos($model->deposit_options, 'sofort') !== false){echo "checked";}?> > 
  			<img class="deposit-options-image" src="<?php echo Yii::app()->getBaseUrl(true);?>/images/deposit_options/sofort.png"> 
	  	</div>

		<div class="col-md-2">
	  		<input type="checkbox" name="deposit_options[]" value="visa" <?php if(strpos($model->deposit_options, 'visa') !== false){echo "checked";}?> > 
  			<img class="deposit-options-image" src="<?php echo Yii::app()->getBaseUrl(true);?>/images/deposit_options/visa.png"> 
	  	</div>	 

		<div class="col-md-2">
	  		<input type="checkbox" name="deposit_options[]" value="webmoney" <?php if(strpos($model->deposit_options, 'webmoney') !== false){echo "checked";}?> > 
  			<img class="deposit-options-image" src="<?php echo Yii::app()->getBaseUrl(true);?>/images/deposit_options/webmoney.png"> 
	  	</div>

		<div class="col-md-2">
	  		<input type="checkbox" name="deposit_options[]" value="wiretransfer" <?php if(strpos($model->deposit_options, 'wiretransfer') !== false){echo "checked";}?> > 
  			<img class="deposit-options-image" src="<?php echo Yii::app()->getBaseUrl(true);?>/images/deposit_options/wiretransfer.png"> 
	  	</div>	

		<div class="col-md-2">
	  		<input type="checkbox" name="deposit_options[]" value="bitcoin" <?php if(strpos($model->deposit_options, 'bitcoin') !== false){echo "checked";}?> > 
  			<img class="deposit-options-image" src="<?php echo Yii::app()->getBaseUrl(true);?>/images/deposit_options/bitcoin.png"> 
	  	</div>	 

		<div class="col-md-2">
	  		<input type="checkbox" name="deposit_options[]" value="fasapay" <?php if(strpos($model->deposit_options, 'fasapay') !== false){echo "checked";}?> > 
  			<img class="deposit-options-image" src="<?php echo Yii::app()->getBaseUrl(true);?>/images/deposit_options/fasapay.png"> 
	  	</div>	 

		<div class="col-md-2">
	  		<input type="checkbox" name="deposit_options[]" value="perfectmoney" <?php if(strpos($model->deposit_options, 'perfectmoney') !== false){echo "checked";}?> > 
  			<img class="deposit-options-image" src="<?php echo Yii::app()->getBaseUrl(true);?>/images/deposit_options/perfectmoney.png">
	  	</div>	 
  		
  		<?php echo $form->error($model,'deposit_options'); ?>
	</div>

	<div class="form-group col-md-12 buttons" style="margin-top: 20px">
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

    /*$( "#broker-title" ).keyup(function() {
    	var permalink = '';
        var title = $("#broker-title").val();

        if(title.length > 0){
            permalink = editPermalink(title);
        }
        //alert(permalink);
        $("#broker-url").val(permalink);
        $("#broker-url").html(permalink);
    });*/

    function editPermalink(perma) {
        perma = $.trim(perma);
        return perma.toLowerCase().replace(/[^a-z 0-9]/g,' ').replace(/[ ][ ]*/g, '-');
    }

 </script>




<?php $this->endWidget(); ?>

		</div>
    </div>
</div>