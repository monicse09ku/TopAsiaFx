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
<div class="col-md-10 col-md-offset-1">
    <h1 class="deposit-bonus-header">Forex No Deposit Bonuses</h1>
    <div class="top-desc-deposit" style="text-align:justify;">
        <div class="col-md-2">
            <img class="img img-responsive" alt="topasiafx-no-depositbonus" src="<?php echo Yii::app()->getBaseUrl(true);?>/images/nodeposit_green.png">
        </div>
        <div class="col-md-10 margin-left-0 para_text">
            <h3>Why Broker Offer No Deposit Bonus?</h3>
            <p>
                <i>Forex no deposit bonus</i> is a great advantage for newbie traders, if you are new in this world biggest financial market call “Forex” and feel scared to invest so, this is the best opportunities for you to try this <i>Forex trading</i> without any investment. You can start Forex trading without any investment with <i>no deposit bonus</i> offer also you may withdraw your winning profit amount after full-fill the broker T&amp;C. There are two types of <i>no deposit bonus</i>, please check below:
            </p>
        </div>
        <div class="col-md-12 margin-left-0 para_text">
            <div class="col-md-6">
            <p>
                <strong>No Deposit Bonus:</strong> A broker offers this type of bonus only their new clients. In order to receive this kind of offer, you need to register and pass the company verification process, after that the company funds your trading account. You can withdraw the bonus amount and the profit amount but sometimes it’s very on the offer few brokers didn’t allow to withdraw bonus amount they only allow profit amount. Please, keep in mind before withdrawing you need to full-fill the company T&amp;C first.
            </p>
            </div>
            <div class="col-md-6">
            <p>
                <strong>No Deposit Bonus with Subsequent Deposit:</strong> A broker offers this type of bonus to their new clients and existing clients as well. In this type of bonus, you need to make a minimum deposit before making any withdrawal request and other T&amp;C will be applicable as well.
            </p>
            </div>
            <div class="col-md-12" style="padding: 20px">
                <p>
                    By <i>no deposit bonus</i> offer to encourage you to open a live account with <i>no deposit bonus</i> forex brokers. It's a good opportunity for newbie trader also a real trader. See more in details…
                </p>
            </div>
        </div>
        <div class="col-md-12 para_text"> 
            <div class="col-md-4">
                <p><b>Broker Advantages</b></p>
                <ul>
                    <li>Attract More Clients</li>
                    <li>Get Huge Clients Data with Active Live Accounts</li>
                    <li>Increase Clients Loyal.</li>
                </ul>
            </div>
            <div class="col-md-4">
                <p><b>Trader Advantages</b></p>
                <ul>
                    <li>Without Risk &amp; Money</li>
                    <li>More Trading Experiences</li>
                    <li>Huge Chances for Making Money by No Investment.</li>
                </ul>
            </div>
            <div class="col-md-4">
                <p><b>Now Apply to Action Properly</b></p>
                <ul>
                    <li>Justify "Choosing the Best Broker"…How? <a href="<?php echo Yii::app()->getBaseUrl(true);?>">Read Me. </a></li>
                    <li>Read Brokers Agreements Carefully</li>
                    <li>Open a Live Account under a Trusty Broker</li>
                    <li>Let's Request to no deposit bonus offer.</li>
                </ul>
            </div>
        </div>
        <div class="col-md-12 para_text" style="padding: 20px">
            <p>
                We care about all of the trader’s pros &amp; cons that’s why we decorated for you the most of <i>regulated &amp; realno deposit bonus forex brokers list</i> in below. Don’t miss, let’s see all have <i>brokers’ compares &amp; reviews</i> instantly!!!
            </p>
        </div>
    </div>
</div>

<div class="col-md-10 col-md-offset-1 table-margin">
    <table id="example" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No Deposit Bonuses</th>
                <th>Average Rating</th>
                <th>Comments</th>
                <th>Available Till</th>
                <th>Status</th>
                <th>Updated on</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($no_deposit_bonuses_data as $no_deposit_bonus_data){ 
                ?>
            <tr>
                <td>
                    <a href="<?php echo Yii::app()->getBaseUrl(true).'/forex-nodeposit-bonuses/'.$no_deposit_bonus_data['url'];?>">
                    <?php echo $no_deposit_bonus_data['title'];?>
                    </a>
                </td>
                <td>
                    <?php 
                        for ($i=1; $i <= 5; $i++) { 
                            if ($i <= $no_deposit_bonus_data['average_rating']) {
                                echo '<i class="fa fa-star rated-star" aria-hidden="true"></i>';
                            }else{
                                echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                            }
                        }
                    ?>
                </td>
                <td>
                    <?php echo $no_deposit_bonus_data['total_comments'];?>
                </td>
                <td>
                    <?php echo $no_deposit_bonus_data['available_till'];?>
                </td>
                <td>
                    <?php 
                        if ($no_deposit_bonus_data['status'] == 1) {
                            echo '<i class="fa fa-check slider_pros_icon" aria-hidden="true"></i>';
                        }else{
                            echo '<i class="fa fa-times slider_cons_icon" aria-hidden="true"></i>';
                        } 
                    ?>
                </td>
                <td>
                    <?php echo date('M d, Y', strtotime($no_deposit_bonus_data['update_date']));?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <div class="users-comments">
        <?= $this->renderPartial('no_deposit_bonus_suggesstion_view',array('no_deposit_bonus_suggestions' => $no_deposit_bonus_suggestions, 'single' => $single));?>
    </div>
    <div class="review_comment">
        <?= $this->renderPartial('no_deposit_bonus_suggesstion',array('no_deposit_bonus_data' => $no_deposit_bonus_data));?>
    </div>
</div>

<div class="col-md-10 col-md-offset-1 table-margin">
    <div class="faqs_section">
        <?= $this->renderPartial('faqs',array('faqs' => $faqs));?>
    </div>
</div>