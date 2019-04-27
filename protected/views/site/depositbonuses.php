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
        <?php echo !empty($page_content['top_content']) ? $page_content['top_content'] : '';?>
    </div>

    <table id="example" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Deposit bonuses</th>
                <th>Average rating</th>
                <th>Comments</th>
                <th>Available till</th>
                <th>Status</th>
                <th>Updated on</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($deposit_bonuses_data as $deposit_bonus_data){ 
                ?>
            <tr>
                <td>
                    <a href="<?php echo Yii::app()->getBaseUrl(true).'/forex-deposit-bonuses/'.$deposit_bonus_data['url'];?>">
                    <?php echo $deposit_bonus_data['title'];?>
                    </a>
                </td>
                <td>
                    <?php 
                        for ($i=1; $i <= 5; $i++) { 
                            if ($i <= $deposit_bonus_data['average_rating']) {
                                echo '<i class="fa fa-star rated-star" aria-hidden="true"></i>';
                            }else{
                                echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                            }
                        }
                    ?>
                </td>
                <td>
                    <?php echo $deposit_bonus_data['total_comments'];?>
                </td>
                <td>
                    <?php echo $deposit_bonus_data['available_till'];?>
                </td>
                <td>
                    <?php 
                        if ($deposit_bonus_data['status'] == 1) {
                            echo '<i class="fa fa-check slider_pros_icon" aria-hidden="true"></i>';
                        }else{
                            echo '<i class="fa fa-times slider_cons_icon" aria-hidden="true"></i>';
                        } 
                    ?>
                </td>
                <td>
                    <?php echo date('M d, Y', strtotime($deposit_bonus_data['update_date']));?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <div class="top-desc-deposit" style="text-align:justify;">  
        <?php echo !empty($page_content['bottom_content']) ? $page_content['bottom_content'] : '';?>
    </div>

    <div class="faqs_section">
        <?= $this->renderPartial('faqs',array('faqs' => $faqs));?>
    </div>

    <div class="review_comment">
        <?= $this->renderPartial('deposit_bonus_suggesstion_view',array('deposit_bonus_suggestions' => $deposit_bonus_suggestions, 'single' => $single));?>
    </div>
    <div class="review_comment">
        <?= $this->renderPartial('deposit_bonus_suggesstion',array('deposit_bonus_data' => $deposit_bonus_data));?>
    </div>
</div>