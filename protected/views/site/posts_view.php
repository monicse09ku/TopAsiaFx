<?php 
    if(!empty($posts)){
?>
<h3 style="font-family: RobotoSlabRegular;"><?php echo $title;?></h3>

<div class="MultiCarousel" data-items="1,3,3,3" data-slide="1" id="MultiCarousel"  data-interval="1000">
    <div class="MultiCarousel-inner">
    	<?php for ($i = 0; $i < count($posts); $i++){ ?>
            <div class="item">
                <div class="pad15">
                	<a style="text-decoration: none;" href="<?php echo Yii::app()->getBaseUrl(true).'/blogs/'.$posts[$i]['url'];?>">
						<img class="img img-responsive zoom" src="<?php echo Yii::app()->getBaseUrl(true).'/images/post_images/'.$posts[$i]['thumbnail'];?>">
						<h4 class="post-title"><?php echo $posts[$i]['title'];?></h4>
						<p class="post-short-desc"><?php echo substr($posts[$i]['short_description'], 0, 120);?></p>
						<p>Read More...</p>
					</a>
						
                </div>
            </div>
    	<?php } ?>
    </div>
    <?php if(count($posts) > 3 ){?>
        <button class="btn btn-primary leftLst"><</button>
        <button class="btn btn-primary rightLst">></button>
    <?php } ?>
</div>
<?php } ?>