<?php
    /* @var $this SiteController */
    /* @var $model ContactForm */
    /* @var $form CActiveForm */
    
    ?>
<div class="container">
    <?php if(!empty($banner_data[EWebUser::HEAD])){?>
    <div class="top_banner">
        <?php echo $banner_data[EWebUser::HEAD]['code'];?>
    </div>
    <?php } ?>
    <?php if(!empty($banner_data[EWebUser::LEFT])){?>
    <div class="outer_left">
        <div class="inner_left">
            <?php echo $banner_data[EWebUser::LEFT]['code'];?>
        </div>
    </div>
    <?php } ?>
    <?php if(!empty($banner_data[EWebUser::RIGHT])){?>
    <div class="outer_right">
        <div class="inner_right">
            <?php echo $banner_data[EWebUser::RIGHT]['code'];?>
        </div>
    </div>
    <?php } ?>
    <h1 class="contact_header">Contact Us</h1>
    <?php if(Yii::app()->user->hasFlash('contact')): ?>
    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('contact'); ?>
    </div>
    <?php else: ?>
    <p  class="contact_desc">
        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
    </p>
</div>
<!-- container -->
<div class="col-md-9">
    <div class="form box box-primary">
        <div class="box-body">
            <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'contact-form',
                'enableClientValidation'=>true,
                'clientOptions'=>array(
                	'validateOnSubmit'=>true,
                ),
                )); ?>
            <p class="note">Fields with <span class="required">*</span> are required.</p>
            <?php echo $form->errorSummary($model); ?>
            <div class="form-group col-md-6">
                <?php echo $form->labelEx($model,'name'); ?>
                <?php echo $form->textField($model,'name', array ('class' => 'form-control')); ?>
                <?php echo $form->error($model,'name'); ?>
            </div>
            <div class="form-group col-md-6">
                <?php echo $form->labelEx($model,'email'); ?>
                <?php echo $form->textField($model,'email', array ('class' => 'form-control')); ?>
                <?php echo $form->error($model,'email'); ?>
            </div>
            <div class="form-group col-md-12">
                <?php echo $form->labelEx($model,'subject'); ?>
                <?php echo $form->textField($model,'subject', array ('class' => 'form-control')); ?>
                <?php echo $form->error($model,'subject'); ?>
            </div>
            <div class="form-group col-md-12">
                <?php echo $form->labelEx($model,'body'); ?>
                <?php echo $form->textArea($model,'body', array ('class' => 'form-control')); ?>
                <?php echo $form->error($model,'body'); ?>
            </div>
            <?php if(CCaptcha::checkRequirements()): ?>
            <div class="form-group col-md-12">
                <?php echo $form->labelEx($model,'verifyCode'); ?>
                <div>
                    <?php $this->widget('CCaptcha'); ?>
                    <?php echo $form->textField($model,'verifyCode'); ?>
                </div>
                <div class="hint">Please enter the letters as they are shown in the image above.
                    <br/>Letters are not case-sensitive.
                </div>
                <?php echo $form->error($model,'verifyCode'); ?>
            </div>
            <?php endif; ?>
            <div class="form-group col-md-12 buttons">
                <?php echo CHtml::submitButton('Submit'); ?>
            </div>
            <?php $this->endWidget(); ?>
        </div>
        <!-- form -->
    </div>
    <!-- form -->
</div>
<!-- col-md-6 -->
<div class="col-md-3">
    <?= $this->renderPartial('top_brokers',array('brokers_data' => $brokers_data));?>
</div>
<?php endif; ?>

