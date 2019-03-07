<?php
    /* @var $this SiteController */
     
    $i = 0;
    ?>
<div class="container">    
    <div class="header_top">
        <div class="col-md-12">
            <h2>Top Asia 8 Reliable FOREX Brokers Reviews  & Compares - TopAsiaFX</h2>
            <h3>Details Broker Review will help to make a right decision!</h3>
        </div>
    </div>
    
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
    
    <div class="filter_options">
        <div class="col-md-1 col-sm-2">
            <p class="show_only">Show Only : </p>
        </div>
        <div class="col-md-2 col-sm-2">
            <select id="score_select">
                <option value="">Score</option>
                <option value="90">Above 90</option>
                <option value="80">Above 80</option>
                <option value="70">Above 70</option>
                <option value="60">Above 60</option>
                <option value="50">Above 50</option>
            </select>
        </div>
        <div class="col-md-2 col-sm-2">
            <select id="deposit_select">
                <option value="">Deposit Options</option>
                <option value="cashu">CashU</option>
                <option value="unionpay">China Union Pay</option>
                <option value="debit">Debit Cards</option>
                <option value="giropay">GiroPay</option>
                <option value="mastercard">MasterCard</option>
                <option value="neteller">Neteller</option>
                <option value="paypal">Paypal</option>
                <option value="skrill">Skrill</option>
                <option value="sofort">Sofort</option>
                <option value="visa">Visa</option>
                <option value="webmoney">WebMoney</option>
                <option value="wiretransfer">Fast Wire Transfer</option>
            </select>
        </div>
        <div class="col-md-2 col-sm-2">
            <select id="spreads_select">
                <option value="">Spreads</option>
                <option value="1">1 PIP and lower</option>
                <option value="1.5">1.5 PIP and lower</option>
                <option value="2">2 PIP and lower</option>
                <option value="2.5">2.5 PIP and lower</option>
            </select>
        </div>
        <div class="col-md-2 col-sm-2">
            <select id="education_select">
                <option value="">Education</option>
                <option value="Personal Account Manager">Personal Account Manager</option>
                <option value="Webinar">Webinar</option>
                <option value="eBook">eBook</option>
                <option value="Video Tutorial">Video Tutorial</option>
                <option value="Technical Analysis">Technical Analysis</option>
            </select>
        </div>
    </div>
    <table id="example" class="display" style="width:100%;border-spacing: 0;" >
        <thead>
            <tr>
                <th>RANK</th>
                <th>BROKER</th>
                <th>
                    SPECIAL OFFER 
                    <span class="table_header_tooltip" data-placement="bottom" data-toggle="tooltip" title="T&Cs Apply">!</span>
                </th>
                <th>
                    MIN DEPOSIT 
                    <span class="table_header_tooltip" data-placement="bottom" data-toggle="tooltip" title="The minimum amount you need to deposit in order to start trading">!</span>
                </th>
                <th>
                    SPREADS FROM 
                    <span class="table_header_tooltip" data-placement="bottom" data-toggle="tooltip" title="Spreads are representative <br> of a EUR/USD trade. Spreads are represented <br> in PIPs. 1 PIP is equal to 1/100th of 1% (0.0001).">!</span>
                </th>
                <th>USER SCORE</th>
                <th>
                    MAX LEVERAGE
                    <span class="table_header_tooltip" data-placement="bottom" data-toggle="tooltip" title="Leverage refers to the ratio of securities you can buy for a given payment. The higher the leverage ratio, the higher your buying power (and the higher the risk). For example, a leverage ratio of 500:1 means you can purchase 500 securities, but only pay the equivalent of 1 security valuation.">!</span>
                </th>
                <th hidden>Deposit Options</th>
                <th hidden>Education</th>
                <th>REGULATION</th>
                <th>SUPPORT</th>
                <th class="view-site-link">START TRADING</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($brokers_data as $broker_data){ 
                  $i++;
                  $image_url = $broker_data['broker_image']; 
                  $id = $broker_data['id']; 
                  $broker_url = $broker_data['broker_url']; 
                ?>
            <tr>
                <td><?php echo $i;?></td>
                <td><a href="<?php echo $broker_data['site_address'];?>" target="_blank"><img alt="broker_grid_image" class="broker_grid_image" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/broker_images/<?php echo $image_url ?>"></a></td>
                <td>
                    <p><b><?php echo $broker_data['bonus_title'];?></b></p>
                    <p><?php echo $broker_data['bonus_desc'];?></p>
                </td>
                <td><b><?php echo $broker_data['min_deposit'];?></b></td>
                <td><b><?php echo $broker_data['spreads_from'];?></b></td>
                <td>
                    <p><span class="grid_score"><?php echo $broker_data['user_score'];?></span></p>
                    <a class="read_review_link" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/best-broker-reviews/<?php echo $broker_url ?>">Read Review</a>
                </td>
                <td><b><?php echo $broker_data['max_leverage'];?></b></td>
                <td hidden><?php echo $broker_data['deposit_options'];?></td>
                <td hidden><?php echo $broker_data['education'];?></td>
                <td class="table_regulation"><?php echo $broker_data['regulation'];?></td>
                <td>
                    <div class="support-top-div">
                        <img alt="chat" style="border-right: 1px solid black; padding-right: 4px;" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/chat.png">
                        <img alt="phone" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/phone.png">
                    </div>
                    <div class="support-bottom-div">
                        <img alt="mail" style="border-right: 1px solid black; padding-right: 4px;" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/mail_off.png">
                        <img alt="all_day" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/24_7_off.png">
                    </div>
                </td>
                <td class="visit_td"><a target="_blank" class="visit_site_link" href="<?php echo $broker_data['site_address'];?>">Visit Site >></a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="row how_to_block">
        <div class="col-md-5">
            <h3>How to Choose a Forex Broker?</h3>
            <p class="para_text">TopAsiaFx.com helps you compare and choose your preferred Forex Broker. We suggest keeping the following checklist in mind when making your decision:</p>
            <ul class="para_text">
                <li>Is the Forex Broker regulated?</li>
                <li>Account Details: Ideally, your broker should offer either a selection of account types or some element of customizability. Competitive spreads and easy deposits/withdrawals are good indicators too. </li>
                <li>Number of Currency Pairs offered: The variety of currency pairs on offer, as well as the quantity, should be considered (the more of both, the better).</li>
                <li>Availability of Customer Service. </li>
                <li>Quality of the Trading Platform: look for a platform that is easy to use, straightforward and offers a collection of technical and analytical tools to enhance your trading experience. </li>
            </ul>
        </div>
        <div class="col-md-7">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <p class="slider_title">Latest Expert Reviews Summary:</p>
                <hr style="height: 2px;">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php
                        $counter = 0;
                        foreach($brokers_data as $broker_data){
                            $counter++;
                            $image_url = $broker_data['broker_image'];
                        ?>
                    <div class="item <?php if($counter <= 1){echo " active"; } ?>">
                        <div class="row">
                            <div class="col-sm-8">
                                <p class="review-title"><?php echo $broker_data['review_title']?></p>
                                <p class="review-desc"><i>Score: <?php echo $broker_data['score']?> Written on: <?php echo $broker_data['update_date']?></i></p>
                            </div>
                            <div class="col-sm-4">
                                <a href="<?php echo $broker_data['site_address'];?>" target="_blank"><img alt="slider_image" class="slider_image" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/broker_images/<?php echo $image_url ?>"></a>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px">
                            <div class="col-sm-6">
                                <h4 class="slider_pons_cons_title">Pros</h4>
                                <?php 
                                    $exploded_pros = explode(';', $broker_data['pros']);
                                    foreach ($exploded_pros as $pros) {
                                    ?>      
                                <div style="display: inline-flex;width: 100%">
                                    <i class="glyphicon glyphicon-ok slider_pros_icon"></i>
                                    <p class="slider_pons_cons_desc"><?php echo $pros; ?></p>
                                </div>
                                <?php
                                    }
                                    ?>
                            </div>
                            <div class="col-sm-6">
                                <h4 class="slider_pons_cons_title">Cons</h4>
                                <?php 
                                    $exploded_cons = explode(';', $broker_data['cons']);
                                    foreach ($exploded_cons as $cons) {
                                    ?>        
                                <div style="display: inline-flex;width: 100%">
                                    <i class="glyphicon glyphicon-remove slider_cons_icon"></i>
                                    <p class="slider_pons_cons_desc"><?php echo $cons; ?></p>
                                </div>
                                <?php
                                    }
                                    ?>
                            </div>
                        </div>
                        <a target="_blank" style="margin-top:20px;float:left;padding: 12px 45px;font-size: 16px" class="visit_site_link" href="<?php echo $broker_data['site_address'];?>">Visit Site >></a>
                        <a style="margin-top:33px;margin-left:20px;float:left" class="read_review_link" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/best-broker-reviews/<?php echo $broker_data['broker_url'] ?>">Read the Full Review</a>
                    </div>
                    <?php
                        }
                        ?>
                </div>
                <!-- Controls -->
                <a class="left carousel-control hidden-xs" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div class="faqs_section">
        <?= $this->renderPartial('faqs',array('faqs' => $faqs));?>
    </div>

</div><!-- container end -->

<div class="footer_top">
    <div class="container">
        <div class="col-md-9">
            <h4>Risk Disclaimer</h4>
            <p>TopAsiaFx.com will not be held legally responsible for any loss or damage resulting from relying on the information presented in this website, including brokers' reviews, financial news, authors' opinions and/or analysis. The data included on TopAsiaFx.com is not always published in real-time and/or necessarily accurate and do not always reflect the views of TopAsiaFx.com owners, employees and/or content contributors. One should know that Forex trading or any other kind of trading involves high risks, and is not suitable for everyone. Before trading Forex or any other financial tool one should be aware of the risks, know exactly his investment goals and limits and acquire a fine level of risk understanding and risk management.</p>
            <!-- content -->
        </div>
        <div class="col-md-3 footer_top_sidebar">
            <p><a class="header_link" href="<?php echo Yii::app()->request->baseUrl; ?>/">Home</a></p>
            <p><a class="header_link" href="<?php echo Yii::app()->request->baseUrl; ?>/about">About Us</a></p>
            <p><a class="header_link" href="<?php echo Yii::app()->request->baseUrl; ?>/contact">Contact Us</a></p>
            <div id="share"></div>
        </div>
    </div>
</div>

<?php if(!empty($banner_data[EWebUser::POPUP])){?>
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close modal-close-button" data-dismiss="modal">&times;</button>
                    <?php echo $banner_data[EWebUser::POPUP]['code'];?>
                </div>
            </div>
        </div>
    </div>
    
<?php } ?>