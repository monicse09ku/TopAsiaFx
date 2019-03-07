<?php 
if(count($single_broker_users_reviews) > 0){
	foreach ($single_broker_users_reviews as $single_broker_users_review) {
?>
<div class="row single-comment">
	<div class="col-md-2">
		<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/user_images/avatar<?php echo rand ( 1 , 9 );?>.png" class="img-circle" alt="User Image" height="100" width="100">
	</div>
	<div class="col-md-10">
		<div class="row">
			<div class="col-md-8">
				<p class="commenter-name">
					<?php echo ucfirst($single_broker_users_review['name']);?>
					<span class="commenter-country"> 
					from <?php echo ucfirst($single_broker_users_review['country']);?>
					</span>
				</p>
				<p class="comment-date">
					<?php echo date('jS M, Y', strtotime($single_broker_users_review['create_date']));?>
				</p>
			</div>

			<div class="col-md-4">
				<?php 
					for ($i=1; $i < 6; $i++) { 
						if($i <= $single_broker_users_review['score']){
							echo '<i class="fa fa-2x fa-star comment-star rated-star" aria-hidden="true"></i>';
						}else{
							echo '<i class="fa fa-2x fa-star-o comment-star" aria-hidden="true"></i>';
						}
					}
				?>
			</div>
		</div>
		<hr class="comment-hr">
		<div class="row">
			<div class="col-md-12">
				<p  class="comment">
					<?php echo $single_broker_users_review['comment'];?>
				</p>
			</div>			
		</div>
	</div>
</div>
<?php 
	}
}
?>