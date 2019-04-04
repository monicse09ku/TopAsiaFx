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
<div class="col-md-10 col-md-offset-1 margin-left-percent">
    <h3 class="deposit-bonus-header">All 2019 Forex Brokers Who Offering INSTANT Demo Contest</h3>
    <div class="top-desc-deposit" style="text-align:justify;">
        <div class="col-md-2">
            <img class="img img-responsive" alt="topasiafx-deposit-bonus" src="<?php echo Yii::app()->getBaseUrl(true);?>/images/deposit_red1.png">
        </div>
        <div class="col-md-10 margin-left-0 para_text">
            <h4>Why Broker Offer Deposit Bonuses? For Professionals</h4>
            <p>
                <i>Forex deposit bonus</i> is a great advantage for experienced and newbie both type of traders. Sometimes a broker may offer you <i>deposit bonuses</i> based on your deposit amount. A <i>deposit bonus</i> may increase your trading balance or it may increase your trading margin. There are two types of deposit bonus, please check below: 
            </p>
        </div>
        <div class="col-md-12 margin-left-0 para_text">
            <div class="col-md-6">
            <p>
                <strong>Tradable Deposit Bonus: </strong><i>Tradable deposit bonus</i> directly add clients account main balance in MT4 also if you lose your initial investment then, you can still continue trading using the reaming bonus balance and smoothly withdraw winning profit except for the bonus amount.
            </p>
            </div>
            <div class="col-md-6">
            <p>
                <strong>Credit Deposit Bonus: </strong><i>Credit deposit bonus</i> didn’t add clients main account balance it’s add on the credit section also you can’t use this bonus when you lose your initial investment. This type of bonus only support trading time margin call but you can withdraw this bonus after full-fill the broker T&amp;C.
            </p>
            </div>
            <div class="col-md-12" style="padding: 20px">
                <p>
                    There have many reasons for offering <i>deposit bonus</i> from a broker. Here, A Broker Also A Trader have both benefits of deposit bonus system, maybe you don't know how to see below: 
                </p>
            </div>
        </div>
        <div class="col-md-12 para_text"> 
            <div class="col-md-4">
                <p><b>Broker Advantages</b></p>
                <ul>
                    <li>Attract More Clients</li>
                    <li>Increase Volumes with Profits</li>
                    <li>Increase Clients Faithfull</li>
                </ul>
            </div>
            <div class="col-md-4">
                <p><b>Trader Advantages</b></p>
                <ul>
                    <li>Low Risks</li>
                    <li>Increase Trading Experiences</li>
                    <li>Huge Chance for Making Money by Low Investments.</li>
                </ul>
            </div>
            <div class="col-md-4">
                <p><b>Now Apply to Action Properly</b></p>
                <ul>
                    <li>Justify "Choosing the Best Broker"…How? <a href="<?php echo Yii::app()->getBaseUrl(true);?>">Read Me. </a></li>
                    <li>Open a Live Account under a Trusty Broker</li>
                    <li>Not More Than 80% of Your Regular Trading Volume</li>
                </ul>
            </div>
        </div>
        <div class="col-md-12 para_text" style="padding: 20px">
            <p>
                We care about all of the trader’s pros &amp; cons that’s why we decorated for you the most of <i>regulated &amp; real deposit bonus forex brokers list</i> in below. Don’t miss, let’s see all have <i>brokers’ compares &amp; reviews</i> instantly!!! 
            </p>
        </div>
    </div>
</div>

<div class="col-md-10 col-md-offset-1 table-margin">
    <table id="example" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Demo Contests</th>
                <th>Average rating</th>
                <th>Comments</th>
                <th>Available till</th>
                <th>Status</th>
                <th>Updated on</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($demo_contests_data as $demo_contest_data){ 
                ?>
            <tr>
                <td>
                    <a href="<?php echo Yii::app()->getBaseUrl(true).'/demo-contests/'.$demo_contest_data['url'];?>">
                    <?php echo $demo_contest_data['title'];?>
                    </a>
                </td>
                <td>
                    <?php 
                        for ($i=1; $i <= 5; $i++) { 
                            if ($i <= $demo_contest_data['average_rating']) {
                                echo '<i class="fa fa-star rated-star" aria-hidden="true"></i>';
                            }else{
                                echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                            }
                        }
                    ?>
                </td>
                <td>
                    <?php echo $demo_contest_data['total_comments'];?>
                </td>
                <td>
                    <?php echo $demo_contest_data['available_till'];?>
                </td>
                <td>
                    <?php 
                        if ($demo_contest_data['status'] == 1) {
                            echo '<i class="fa fa-check slider_pros_icon" aria-hidden="true"></i>';
                        }else{
                            echo '<i class="fa fa-times slider_cons_icon" aria-hidden="true"></i>';
                        } 
                    ?>
                </td>
                <td>
                    <?php echo date('M d, Y', strtotime($demo_contest_data['update_date']));?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <div class="faqs_section">
        <?= $this->renderPartial('faqs',array('faqs' => $faqs));?>
    </div>

    <div class="review_comment">
        <?= $this->renderPartial('demo_contest_suggesstion_view',array('demo_contests_suggestions' => $demo_contests_suggestions, 'single' => $single));?>
    </div>
    <div class="review_comment">
        <?= $this->renderPartial('demo_contest_suggesstion',array('demo_contests_data' => $demo_contests_data));?>
    </div>

</div>