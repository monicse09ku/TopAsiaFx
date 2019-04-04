<?php
    /* @var $this SiteController */
    /* @var $model LoginForm */
    /* @var $form CActiveForm  */
    
    ?>
<?= $this->renderPartial('blog_topbar',array('categories' => $categories));?>
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
    <div class="">
        <div class="col-md-12" style="font-family: RobotoSlabRegular;">
            <?= $this->renderPartial('posts_view',array('title' => "Most Recent", 'posts' => $posts));?>
            <?= $this->renderPartial('posts_view',array('title' => "Most Viewed", 'posts' => $most_viewed_posts));?>
            <h3 style="font-family: RobotoSlabRegular;">View All</h3>
            <?php 
                for($i = 0; $i < count($posts); $i++ ){
                         	if(($i%3) == 0){
                ?>	
            <div class="post-div">
                <?php } ?>
                <div class="col-md-4 col-sm-4">
                    <a style="text-decoration: none;" href="<?php echo Yii::app()->getBaseUrl(true).'/blogs/'.$posts[$i]['url'];?>">
                        <img class="img img-responsive zoom" src="<?php echo Yii::app()->getBaseUrl(true).'/images/post_images/'.$posts[$i]['thumbnail'];?>">
                        <h4 class="post-title"><?php echo $posts[$i]['title'];?></h4>
                        <p class="post-short-desc"><?php echo substr($posts[$i]['short_description'], 0, 120);?></p>
                        <p>Read More...</p>
                    </a>
                </div>
                <?php
                    if((($i > 0) && ($i%3) == 2)){
                    ?>
            </div>
            <?php } ?>
            <?php } ?>
            <?php if(($i%3) != 0){?>
        </div>
        <?php } ?>

        <?php if(count($posts) > 10){ ?>
        <div class="row" style="text-align: center;margin: 10px 0">
            <button class="btn btn-primary btn-lg load-more-button">Load More...</button>
        </div>
    	<?php } ?>
    </div>
</div>
</div>
<?= $this->renderPartial('footer');?>
