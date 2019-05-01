<?php
    /* @var $this SiteController */
    $this->pageTitle = !empty($demo_contests_data['title']) ? $demo_contests_data['title'] : "The Best Forex Brokers Reviews & Compares Info | topasiafx.com";

      
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

<div class="col-md-8 col-md-offset-2 table-margin margin-left-percent">

    <h3 class="deposit-bonus-header"><?php echo $demo_contests_data['title']; ?></h3>

    <p>
        <?php 
            if ($demo_contests_data['status'] == 1) {
                echo '<i class="fa fa-check slider_pros_icon" aria-hidden="true"></i>';
            }else{
                echo '<i class="fa fa-times slider_cons_icon" aria-hidden="true"></i>';
            } 
        ?>
    </p>

    <p>
        <?php 
            for ($i=1; $i <= 5; $i++) { 
                if ($i <= $demo_contests_data['average_rating']) {
                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                }else{
                    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                }
            }
        ?>
    </p>

    <div class="deposit_bonus_details">
        <?php echo $demo_contests_data['details']; ?>
    </div>

    <div class="faqs_section">
        <?= $this->renderPartial('posts_view',array('title' => "Most Recent", 'posts' => $posts));?>
    </div>

    <div class="users-comments">
        <?= $this->renderPartial('demo_contest_reviews_view',array('demo_contests_reviews' => $demo_contests_reviews, 'single' => $single));?>
    </div>

    <div class="review_comment">
        <?= $this->renderPartial('demo_contest_rating',array('demo_contests_data' => $demo_contests_data));?>
    </div>
</div>