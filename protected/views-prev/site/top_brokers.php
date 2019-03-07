<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

?>

<div class="review_sidebar_top_div">
    <p class="sidebar_widget_header">Top5 Forex Brokers</p>
    <?php 
        foreach($brokers_data as $broker_data){ 
        $image_url = $broker_data['broker_image']; 
    ?>
    <div class="row" style="margin-bottom: 10px;">
    
        <img class="broker_sidebar_images_broker_list" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/broker_images/<?php echo $image_url ?>">
       
        <span class="grid_score" style="text-align: center;"><?php echo $broker_data['user_score'];?></span>
    
    </div>
    <?php } ?>
</div>

<a class="site_review_link" href="<?php echo Yii::app()->getBaseUrl(true);?>">See the full brokers list</a>

