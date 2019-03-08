<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */
$image_url = $this_broker['broker_image']; 
?>
<div class="review_sidebar_top_div">
    <p class="sidebar_widget_header"><?php echo $this_broker['broker_title'];?> Overview</p>
    <p style="text-align: center;"><a href="<?php echo $this_broker['site_address'];?>" target="_blank"><img class="broker_sidebar_images" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/broker_images/<?php echo $image_url ?>"></a></p>
    <p style="text-align: center;padding-top: 10px;padding-bottom: 10px;"><a style="padding: 12px 45px;font-size: 16px" target="_blank" class="visit_site_link" href="<?php echo $this_broker['site_address'];?>">Visit Site >></a></p>
    <!-- p class="sidebar_widget_p"><b>Website:</b> <a target="_blank" href="<?php echo $this_broker['site_address'];?>"><?php echo $this_broker['site_address'];?></a></p -->
    <p class="sidebar_widget_p"><b>Telephone:</b> <?php echo $this_broker['telephone'];?></p>
    <p class="sidebar_widget_p"><b>Regulation:</b> <?php echo $this_broker['regulation'];?></p>
    <p class="sidebar_widget_p"><b>Pairs Offered:</b> <?php echo $this_broker['pairs_offered'];?></p>
    <p class="sidebar_widget_p"><b>Minimum Deposit:</b> <?php echo $this_broker['min_deposit'];?></p>
    <p class="sidebar_widget_p"><b>Spreads From:</b> <?php echo $this_broker['spreads_from'];?></p>
    <p class="sidebar_widget_p"><b>Max Leverage:</b> <?php echo $this_broker['max_leverage'];?></p>
    <p class="sidebar_widget_p"><b>Markets:</b> <?php echo $this_broker['markets'];?></p>
    <p class="sidebar_widget_p"><b>Deposit Options:</b> <br/>
    <?php 
        $deposit_options = explode(";", $this_broker['deposit_options']);
        foreach ($deposit_options as $key => $value) {
            $deposit_option_image_url = Yii::app()->getBaseUrl(true)."/images/deposit_options/".$value.".png";
    ?>
        <img class="deposit_options_image_views" src="<?php echo $deposit_option_image_url;?>">
    <?php        
        } 
    ?>
    </p>
</div>

<div style="width: 100%" class="sidebar_pros_cons">
    <h3>Pros</h3>
    <?php
        $pros = explode(';', $this_broker['pros']);
        $cons = explode(';', $this_broker['cons']);

        foreach ($pros as $pros_val) {
    ?>
    <div style="display: inline-flex;width: 100%"> 
        <i class="fa fa-check slider_pros_icon" aria-hidden="true"></i>
        <p style="margin-left: 8px"><?php echo $pros_val; ?></p>
    </div>
    <?php        
        }
    ?>
    <h3>Cons</h3>
    <?php
        foreach ($cons as $cons_val) {
    ?>
    <div style="display: inline-flex;width: 100%"> 
        <i class="fa fa-times slider_cons_icon" aria-hidden="true"></i>
        <p style="margin-left: 8px"><?php echo $cons_val; ?></p>
    </div> 
    <?php        
        }
    ?>
    <p style="text-align: center;margin-top:15px;"><a style="padding: 12px 45px;font-size: 16px" target="_blank" class="visit_site_link" href="<?php echo $this_broker['site_address'];?>">Visit Site >></a></p>
</div>

<div class="review_sidebar_top_div">
    <p class="sidebar_widget_header">Top5 Forex Brokers</p>
    <?php 
        foreach($brokers_data as $broker_data){ 
        $image_url = $broker_data['broker_image']; 
    ?>
    <div class="row" style="margin-bottom: 10px;">
    
        <a href="<?php echo $broker_data['site_address'];?>"><img class="broker_sidebar_images_broker_list" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/broker_images/<?php echo $image_url ?>"></a>
       
        <span class="grid_score" style="text-align: center;"><?php echo $broker_data['score'];?></span>
    
    </div>
    <?php } ?>
</div>

<a class="read_review_link" href="<?php echo Yii::app()->getBaseUrl(true);?>">See the full brokers list</a>

