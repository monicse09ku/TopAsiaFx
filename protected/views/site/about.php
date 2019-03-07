<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

?>

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
    
<div class="container about_content">
	<div class="col-md-9">
		<h1 class="about_header">About Us</h1>

		<p class="about_desc">TopAsiaFx Brokers provides you with accurate comparisons and in-depth reviews of top Forex brokers. Whether a novice trader or experienced professional, we aim to help you make an informed decision when it comes to choosing your Forex broker. TopAsiaFx Brokers is providing a free and valuable service to traders. It may however charge brokers for their reviews on our site.</p>

	</div>
	<div class="col-md-3">
		<?= $this->renderPartial('top_brokers',array('brokers_data' => $brokers_data));?>
	</div>
</div>
