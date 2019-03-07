<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$image_url = $this_broker['broker_image']; 
?>
<style>
.topFloatingDiv {
	width: 100%;
	height: 80px;
	background: white;
	position: fixed;
	top: 0;
	right: 0;
	left: 0;
	z-index: 5;
	text-align: center;
	display: none;
	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.20);
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.20);
	padding-top: 15px;
}

</style>
<div class="topFloatingDiv">
<p style="text-align: center;"><a href="<?php echo $this_broker['site_address'];?>" target="_blank"><img style="max-height: 60px;" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/broker_images/<?php echo $image_url ?>"></a><a style="padding: 12px 45px;font-size: 16px; margin-left: 5px;" target="_blank" class="visit_site_link" href="<?php echo $this_broker['site_address'];?>">Visit Site >></a></p>
</div>

<div class="row">
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
	<div class="filter_options">
		<div class="col-md-9" style="font-family: RobotoSlabRegular;">
			<div class="review_top">
				<h3>
					<?php echo $this_broker['h1']; ?>
					<span class="grid_score_detail" style=""><?php echo $this_broker['user_score'];?></span>
				</h3>
				<h5>
					<?php echo $this_broker['broker_short_desc']; ?>
				</h5>
			</div>
			<div class="review_page_desc">
				<?php echo $this_broker['broker_detail_desc']; ?>
			</div>		

			<div >
		        <?= $this->renderPartial('faqs',array('faqs' => $faqs));?>
		    </div>

			<div class="review_comment">
				<?= $this->renderPartial('broker_rating',array('brokers_data' => $brokers_data, 'this_broker' => $this_broker));?>
			</div>

			<div class="users-comments">
				<?= $this->renderPartial('users_comments',array('single_broker_users_reviews' => $single_broker_users_reviews));?>
			</div>

		</div>
		<div class="col-md-3">
			<?= $this->renderPartial('review_sidebar',array('brokers_data' => $brokers_data, 'this_broker' => $this_broker));?>
		</div>
	</div>

</div>