<?php if($single){ ?>
<h3 class="deposit-bonus-header" style="margin-top: 20px;margin-bottom: 20px;color: #034aa2;">Leave Your Valuable Comments:</h3>
<?php }else{ ?>
<!--h3 class="deposit-bonus-header" style="margin-top: 20px;margin-bottom: 20px;color: #034aa2;">Suggest a new promotion:</h3-->
<?php } ?>
<?php 
if(count($deposit_bonus_suggestions) > 0){
	foreach ($deposit_bonus_suggestions as $deposit_bonus_suggestion) {
?>

<div class="row single-comment">
	<div class="col-md-2">
		<img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/user_images/avatar<?php echo rand ( 1 , 9 );?>.png" class="img-circle" alt="User Image" height="100" width="100">
	</div>
	<div class="col-md-10">
		<div class="row">
			<div class="col-md-12">
				<p class="commenter-name">
					<?php echo ucfirst($deposit_bonus_suggestion['name']);?>
				</p>
				<p class="comment-date">
					<?php echo date('jS M, Y', strtotime($deposit_bonus_suggestion['create_date']));?>
				</p>
			</div>
		</div>
		<hr class="comment-hr">
		<div class="row">
			<div class="col-md-12">
				<p class="comment">
					<?php echo $deposit_bonus_suggestion['suggestion'];?>
				</p>
			</div>			
		</div>
	</div>
</div>
<?php 
	}
}
?>