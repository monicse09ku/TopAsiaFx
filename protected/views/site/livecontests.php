<?php
    /* @var $this SiteController */
    
    $i = 0;
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
<div class="col-md-10 col-md-offset-1 table-margin">
    <div class="top-desc-deposit" style="text-align:justify;">  
        <div class="col-md-12">
            <?php echo !empty($page_content['top_content']) ? $page_content['top_content'] : '';?>
        </div>
    </div>
    
    <table id="example" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Live Contests</th>
                <th>Average rating</th>
                <th>Comments</th>
                <th>Available till</th>
                <th>Status</th>
                <th>Updated on</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($live_contests_data as $live_contest_data){ 
                ?>
            <tr>
                <td>
                    <a href="<?php echo Yii::app()->getBaseUrl(true).'/live-contests/'.$live_contest_data['url'];?>">
                    <?php echo $live_contest_data['title'];?>
                    </a>
                </td>
                <td>
                    <?php 
                        for ($i=1; $i <= 5; $i++) { 
                            if ($i <= $live_contest_data['average_rating']) {
                                echo '<i class="fa fa-star rated-star" aria-hidden="true"></i>';
                            }else{
                                echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                            }
                        }
                    ?>
                </td>
                <td>
                    <?php echo $live_contest_data['total_comments'];?>
                </td>
                <td>
                    <?php echo $live_contest_data['available_till'];?>
                </td>
                <td>
                    <?php 
                        if ($live_contest_data['status'] == 1) {
                            echo '<i class="fa fa-check slider_pros_icon" aria-hidden="true"></i>';
                        }else{
                            echo '<i class="fa fa-times slider_cons_icon" aria-hidden="true"></i>';
                        } 
                    ?>
                </td>
                <td>
                    <?php echo date('M d, Y', strtotime($live_contest_data['update_date']));?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <div class="top-desc-deposit" style="text-align:justify;">  
        <div class="col-md-12">
            <?php echo !empty($page_content['bottom_content']) ? $page_content['bottom_content'] : '';?>
        </div>
    </div>

    <div class="faqs_section">
        <?= $this->renderPartial('faqs',array('faqs' => $faqs));?>
    </div>

    <div class="review_comment">
        <?= $this->renderPartial('live_contest_suggesstion_view',array('live_contests_suggestions' => $live_contests_suggestions, 'single' => $single));?>
    </div>
    <div class="review_comment">
        <?= $this->renderPartial('live_contest_suggesstion',array('live_contests_data' => $live_contests_data));?>
    </div>

</div>