<?php 
if(count($live_contests_suggestions) > 0){
	foreach ($live_contests_suggestions as $live_contests_suggestion) {
?>
<div class="col-md-8 col-md-offset-2 table-margin">
	<div class="row single-comment">
		<div class="col-md-2">
			<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/user_images/avatar<?php echo rand ( 1 , 9 );?>.png" class="img-circle" alt="User Image" height="100" width="100">
		</div>
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-12">
					<p class="commenter-name">
						<?php echo ucfirst($live_contests_suggestion['name']);?>
					</p>
					<p class="comment-date">
						<?php echo date('jS M, Y', strtotime($live_contests_suggestion['create_date']));?>
					</p>
				</div>
			</div>
			<hr class="comment-hr">
			<div class="row">
				<div class="col-md-12">
					<p class="comment">
						<?php echo $live_contests_suggestion['suggestion'];?>
					</p>
				</div>			
			</div>
		</div>
	</div>
</div>

<?php 
	}
}
?>