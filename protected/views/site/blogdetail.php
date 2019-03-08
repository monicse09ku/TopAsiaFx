<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$image_url = $post['thumbnail']; 
?>

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
					<?php echo $post['title']; ?>
				</h3>
				<h5>
					<?php echo $post['short_description']; ?>
				</h5>
			</div>
			<div class="review_page_desc">
				<?php echo $post['description']; ?>
			</div>	

			<div class="review_comment">
				<?= $this->renderPartial('post_rating',array('post_id' => $post['id']));?>
			</div>

			<div class="users-comments">
				<?= $this->renderPartial('users_comments',array('single_broker_users_reviews' => $post_reviews));?>
			</div>

		</div>
		<div class="col-md-3">
			<?= $this->renderPartial('blog_sidebar',array('categories' => $categories));?>
		</div>
	</div>

</div>

<script type="text/javascript">
	$( document ).ready(function() {
	    alert( "ready!" );
	});
</script>