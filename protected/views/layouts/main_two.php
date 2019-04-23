<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="yandex-verification" content="4b61399d3e4127b5" />
        <meta name="msvalidate.01" content="E4632F0C5516A71C5CD7B9EA0540A633" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="language" content="en">
        <meta name="author" content="Masud Moni">
        <meta name="description" content="<?php echo Yii::app()->session['meta_description'];?>">
        <meta name="thumbnail" content="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/logo.png" />
        <meta property="og:url" content="<?php echo Yii::app()->request->getBaseUrl(true).Yii::app()->request->requestUri; ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="<?php echo Yii::app()->session['meta_title'];?>" />
        <meta property="og:description" content="<?php echo Yii::app()->session['meta_description'];?>">
        <meta property="og:image" content="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/logo.png" />
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="google-site-verification" content="RKe5Js21ZUJ6YI4i18AFiVNMaOQ0Ko1Axi7c_6Ms2WA" />
        <link rel="alternate" href="https://www.topasiafx.com/" hreflang="en-US"/>
        <link rel="icon" type="image/png" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.png">
        <title><?php echo Yii::app()->session['title'];?></title>
        <link rel="canonical" href="<?php echo Yii::app()->getBaseUrl(true).Yii::app()->request->requestUri;?>" />
        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery-ui.min.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/data_table.css">
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
        <![endif]-->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108095257-3"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            
            gtag('config', 'UA-108095257-3');
        </script>
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KXVXWZ8"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <div class="" id="page">
            <div class="main_nav">
                <nav id="topbar" class="navbar navbar-default navbar-fixed-top clear-header">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>"><img alt="logo" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/Top-Asia-Fx.png"></a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav float-right">
                                <li><a class="header_link" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>">Home</a></li>
                                <li class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle header_link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bonus <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="header_link" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/forex-deposit-bonuses">Deposit Bonus</a></li>
                                        <li><a class="header_link" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/forex-nodeposit-bonuses">No Deposit Bonus</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle header_link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contests <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="header_link" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/forex-demo-contests">Demo Contest</a></li>
                                        <li><a class="header_link" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/forex-live-contests">Live Contest</a></li>
                                    </ul>
                                </li>                            
                                <li><a class="header_link" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/about">About Us</a></li>
                                <li><a class="header_link" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/contact">Contact Us</a></li>
                                <li><a class="header_link" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/blogs">Blogs</a></li>
                                <?php if(!Yii::app()->user->isGuest){?>
                                <li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/dashboard/admin">Dashboard</a></li>
                                <li><a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/site/logout">Logout (<?php echo ucfirst(Yii::app()->user->name);?>)</a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container -->
                </nav>
            </div>
            <div class="content-inner">
                <?php echo $content; ?>
                <div class="clear"></div>
                <div class="footer_top">
                    <div class="container">
                        <div class="col-md-9">
                            <div id="content">
                                <h4>Risk Disclaimer</h4>
                                <p>TopAsiaFx.com will not be held legally responsible for any loss or damage resulting from relying on the information presented in this website, including brokers' reviews, financial news, authors' opinions and/or analysis. The data included on TopAsiaFx.com is not always published in real-time and/or necessarily accurate and do not always reflect the views of TopAsiaFx.com owners, employees and/or content contributors. One should know that Forex trading or any other kind of trading involves high risks, and is not suitable for everyone. Before trading Forex or any other financial tool one should be aware of the risks, know exactly his investment goals and limits and acquire a fine level of risk understanding and risk management.</p>
                            </div>
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
                <div class="clear"></div>
                <!-- <div class="container">
                    <div id="footer">
                        Copyright &copy; <?php echo date('Y'); ?> by TopAsiaFx.<br/>
                        All Rights Reserved.<br/>
                    </div>
                    </div> -->
            </div>
        </div>
        <!-- jQuery 2.2.3 -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-2.2.3.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/data_table.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jssocials.min.js"></script>
        <script>
            $("#share").jsSocials({
                text: "<?php echo Yii::app()->session['meta_description'];?>",
                shares: ["twitter", "facebook", "googleplus", "linkedin", "pinterest"],
                showLabel: false,
                showCount: false,
            });
            $("img").removeClass("img img-responsive");
            $("img").addClass("img img-responsive");
        </script>
        <!-- page -->
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
            $(function(){
                $(".deposit_bonus_details a").attr("target","_blank");
            });
            
            $( document ).ready(function() {
                $(window).scroll(function() {    
                    var scroll = $(window).scrollTop();
                
                    if (scroll < 100) {
                        $("#topbar").css({"padding" : "22px 0"});
                    } else {
                        $("#topbar").css({"padding" : "0", "transition" : "1s"});
                    }
                });
            
                var table = $('#example').DataTable( {
                    //"paging":   false,
                    "bInfo" : false,
                    "pageLength": 25
                    //"bFilter" : false
                } );
            });
            
            
            $("#deposit_bonus_suggestion_form").submit(function(e) {
                e.preventDefault();
            
                var name = $('.deposit_bonus_suggestion_name').val();
                if(name.length === 0){
                    show_alert('alert-danger', 'Please provide name.');
                    $('.deposit_bonus_suggestion_name').css('border', '1px solid red');
                    return false;
                }else{
                    $('.deposit_bonus_suggestion_name').css('border', '1px solid green');
                }
            
                
                var comment = $('.deposit_bonus_suggestion_comment').val();
                if(comment.length === 0){
                    show_alert('alert-danger', 'Please provide comment.');
                    $('.deposit_bonus_suggestion_comment').css('border', '1px solid red');
                    return false;
                }else{
                    $('.deposit_bonus_suggestion_comment').css('border', '1px solid green');
                }
            
                var values = {
                    name: name,
                    comment: comment,
                };
                var url = '<?php echo Yii::app()->getBaseUrl(true);?>/depositbonussuggestions/UsersSuggestionInsert'
                
                $.ajax({
                    type: "POST",
                    url: url,
                    data: values,
                    success: function(result){
                        var response = JSON.parse(result);
                        if(response.status === 'failed'){
                            show_alert('alert-danger', response.message);
                        }else{
                            show_alert('alert-success', response.message);
                            $('.deposit_bonus_suggestion_name').val('');
                            $('.deposit_bonus_suggestion_comment').val('');
                            $('#characters_left').text('1000 characters left');
                        }
                    },
                });        
            });
            
            $("#no_deposit_bonus_suggestion_form").submit(function(e) {
                e.preventDefault();
            
                var name = $('.no_deposit_bonus_suggestion_name').val();
                if(name.length === 0){
                    show_alert('alert-danger', 'Please provide name.');
                    $('.no_deposit_bonus_suggestion_name').css('border', '1px solid red');
                    return false;
                }else{
                    $('.no_deposit_bonus_suggestion_name').css('border', '1px solid green');
                }
            
                
                var comment = $('.no_deposit_bonus_suggestion_comment').val();
                if(comment.length === 0){
                    show_alert('alert-danger', 'Please provide comment.');
                    $('.no_deposit_bonus_suggestion_comment').css('border', '1px solid red');
                    return false;
                }else{
                    $('.no_deposit_bonus_suggestion_comment').css('border', '1px solid green');
                }
            
                var values = {
                    name: name,
                    comment: comment,
                };
                var url = '<?php echo Yii::app()->getBaseUrl(true);?>/nodepositbonussuggestions/UsersSuggestionInsert'
                
                $.ajax({
                    type: "POST",
                    url: url,
                    data: values,
                    success: function(result){
                        var response = JSON.parse(result);
                        if(response.status === 'failed'){
                            show_alert('alert-danger', response.message);
                        }else{
                            show_alert('alert-success', response.message);
                            $('.no_deposit_bonus_suggestion_name').val('');
                            $('.no_deposit_bonus_suggestion_comment').val('');
                            $('#characters_left').text('1000 characters left');
                        }
                    },
                });        
            });

            $("#demo_contest_suggestion_form").submit(function(e) {
                e.preventDefault();
            
                var name = $('.demo_contest_suggestion_name').val();
                if(name.length === 0){
                    show_alert('alert-danger', 'Please provide name.');
                    $('.demo_contest_suggestion_name').css('border', '1px solid red');
                    return false;
                }else{
                    $('.demo_contest_suggestion_name').css('border', '1px solid green');
                }
            
                
                var comment = $('.demo_contest_suggestion_comment').val();
                if(comment.length === 0){
                    show_alert('alert-danger', 'Please provide comment.');
                    $('.demo_contest_suggestion_comment').css('border', '1px solid red');
                    return false;
                }else{
                    $('.demo_contest_suggestion_comment').css('border', '1px solid green');
                }
            
                var values = {
                    name: name,
                    comment: comment,
                };
                var url = '<?php echo Yii::app()->getBaseUrl(true);?>/democontestssuggestion/UsersSuggestionInsert'
                
                $.ajax({
                    type: "POST",
                    url: url,
                    data: values,
                    success: function(result){
                        var response = JSON.parse(result);
                        if(response.status === 'failed'){
                            show_alert('alert-danger', response.message);
                        }else{
                            show_alert('alert-success', response.message);
                            $('.demo_contest_suggestion_name').val('');
                            $('.demo_contest_suggestion_comment').val('');
                            $('#characters_left').text('1000 characters left');
                        }
                    },
                });        
            });

            $("#live_contest_suggestion_form").submit(function(e) {
                e.preventDefault();
            
                var name = $('.live_contest_suggestion_name').val();
                if(name.length === 0){
                    show_alert('alert-danger', 'Please provide name.');
                    $('.live_contest_suggestion_name').css('border', '1px solid red');
                    return false;
                }else{
                    $('.live_contest_suggestion_name').css('border', '1px solid green');
                }
            
                
                var comment = $('.live_contest_suggestion_comment').val();
                if(comment.length === 0){
                    show_alert('alert-danger', 'Please provide comment.');
                    $('.live_contest_suggestion_comment').css('border', '1px solid red');
                    return false;
                }else{
                    $('.live_contest_suggestion_comment').css('border', '1px solid green');
                }
            
                var values = {
                    name: name,
                    comment: comment,
                };
                var url = '<?php echo Yii::app()->getBaseUrl(true);?>/livecontestssuggestion/UsersSuggestionInsert'
                
                $.ajax({
                    type: "POST",
                    url: url,
                    data: values,
                    success: function(result){
                        var response = JSON.parse(result);
                        if(response.status === 'failed'){
                            show_alert('alert-danger', response.message);
                        }else{
                            show_alert('alert-success', response.message);
                            $('.live_contest_suggestion_name').val('');
                            $('.live_contest_suggestion_comment').val('');
                            $('#characters_left').text('1000 characters left');
                        }
                    },
                });        
            });
            
            /* star rating */
            var rating = 0;
            $('.star_rating input').click(function(){
                rating = $(this).val();
            });
            
            $("#deposit_bonus_detail_reviews").submit(function(e) {
                e.preventDefault();
                var deposit_bonus_id = $('#deposit_bonus_id').val();
            
                var name = $('#deposit_bonus_name').val();
                if(name.length === 0){
                    show_alert('alert-danger', 'Please provide name.');
                    $('#deposit_bonus_name').css('border', '1px solid red');
                    return false;
                }else{
                    $('#deposit_bonus_name').css('border', '1px solid green');
                }
            
                var email = $('#deposit_bonus_email').val();
                if(email.length === 0){
                    show_alert('alert-danger', 'Please provide email.');
                    $('#deposit_bonus_email').css('border', '1px solid red');
                    return false;
                }else{
                    let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    if (re.test(email) === false) {
                        show_alert('alert-danger', 'Please provide valid email.');
                        $('#deposit_bonus_email').css('border', '1px solid red');
                        return false;
                    }else{
                        $('#deposit_bonus_email').css('border', '1px solid green');
                    }                
                }
            
                var country = $('#deposit_bonus_country').val();
                if(country.length === 0){
                    show_alert('alert-danger', 'Please select country.');
                    $('#deposit_bonus_country').css('border', '1px solid red');
                    return false;
                }else{
                    $('#deposit_bonus_country').css('border', '1px solid green');
                }
            
                var comment = $('.deposit_bonus_comment').val();
                if(comment.length === 0){
                    show_alert('alert-danger', 'Please provide comment.');
                    $('.deposit_bonus_comment').css('border', '1px solid red');
                    return false;
                }else{
                    $('.deposit_bonus_comment').css('border', '1px solid green');
                }
            
                if(rating === 0){
                    show_alert('alert-danger', 'Please provide rating.');
                    return false;
                }
            
                var values = {
                    deposit_bonus_id: deposit_bonus_id,
                    name: name,
                    user_email: email,
                    country: country,
                    rating: rating,
                    comment: comment,
                };
                var url = '<?php echo Yii::app()->getBaseUrl(true);?>/Depositbonusesreview/UsersReviewInsert'
                
                $.ajax({
                    type: "POST",
                    url: url,
                    data: values,
                    success: function(result){
                        var response = JSON.parse(result);
                        if(response.status === 'failed'){
                            show_alert('alert-danger', response.message);
                        }else{
                            show_alert('alert-success', response.message);
                            $('#deposit_bonus_name').val('');
                            $('#deposit_bonus_email').val('');
                            $('#deposit_bonus_country').val('');
                            $('.deposit_bonus_comment').val('');
                            $('#characters_left').text('1000 characters left');
                            rating = 0;
                        }
                    },
                });        
            });
            
            $("#no_deposit_bonus_detail_reviews").submit(function(e) {
                e.preventDefault();
                var no_deposit_bonus_id = $('#no_deposit_bonus_id').val();
            
                var name = $('#no_deposit_bonus_name').val();
                if(name.length === 0){
                    show_alert('alert-danger', 'Please provide name.');
                    $('#no_deposit_bonus_name').css('border', '1px solid red');
                    return false;
                }else{
                    $('#no_deposit_bonus_name').css('border', '1px solid green');
                }
            
                var email = $('#no_deposit_bonus_email').val();
                if(email.length === 0){
                    show_alert('alert-danger', 'Please provide email.');
                    $('#no_deposit_bonus_email').css('border', '1px solid red');
                    return false;
                }else{
                    let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    if (re.test(email) === false) {
                        show_alert('alert-danger', 'Please provide valid email.');
                        $('#no_deposit_bonus_email').css('border', '1px solid red');
                        return false;
                    }else{
                        $('#no_deposit_bonus_email').css('border', '1px solid green');
                    }                
                }
            
                var country = $('#no_deposit_bonus_country').val();
                if(country.length === 0){
                    show_alert('alert-danger', 'Please select country.');
                    $('#no_deposit_bonus_country').css('border', '1px solid red');
                    return false;
                }else{
                    $('#no_deposit_bonus_country').css('border', '1px solid green');
                }
            
                var comment = $('.no_deposit_bonus_comment').val();
                if(comment.length === 0){
                    show_alert('alert-danger', 'Please provide comment.');
                    $('.no_deposit_bonus_comment').css('border', '1px solid red');
                    return false;
                }else{
                    $('.no_deposit_bonus_comment').css('border', '1px solid green');
                }
            
                if(rating === 0){
                    show_alert('alert-danger', 'Please provide rating.');
                    return false;
                }
            
                var values = {
                    no_deposit_bonus_id: no_deposit_bonus_id,
                    name: name,
                    user_email: email,
                    country: country,
                    rating: rating,
                    comment: comment,
                };
                var url = '<?php echo Yii::app()->getBaseUrl(true);?>/Nodepositbonusesreview/UsersReviewInsert'
                
                $.ajax({
                    type: "POST",
                    url: url,
                    data: values,
                    success: function(result){
                        var response = JSON.parse(result);
                        if(response.status === 'failed'){
                            show_alert('alert-danger', response.message);
                        }else{
                            show_alert('alert-success', response.message);
                            $('#no_deposit_bonus_name').val('');
                            $('#no_deposit_bonus_email').val('');
                            $('#no_deposit_bonus_country').val('');
                            $('.no_deposit_bonus_comment').val('');
                            $('#characters_left').text('1000 characters left');
                            rating = 0;
                        }
                    },
                });        
            });

            $("#demo_contests_detail_reviews").submit(function(e) {
                e.preventDefault();
                var demo_contests_id = $('#demo_contests_id').val();
            
                var name = $('#demo_contests_name').val();
                if(name.length === 0){
                    show_alert('alert-danger', 'Please provide name.');
                    $('#demo_contests_name').css('border', '1px solid red');
                    return false;
                }else{
                    $('#demo_contests_name').css('border', '1px solid green');
                }
            
                var email = $('#demo_contests_email').val();
                if(email.length === 0){
                    show_alert('alert-danger', 'Please provide email.');
                    $('#demo_contests_email').css('border', '1px solid red');
                    return false;
                }else{
                    let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    if (re.test(email) === false) {
                        show_alert('alert-danger', 'Please provide valid email.');
                        $('#demo_contests_email').css('border', '1px solid red');
                        return false;
                    }else{
                        $('#demo_contests_email').css('border', '1px solid green');
                    }                
                }
            
                var country = $('#demo_contests_country').val();
                if(country.length === 0){
                    show_alert('alert-danger', 'Please select country.');
                    $('#demo_contests_country').css('border', '1px solid red');
                    return false;
                }else{
                    $('#demo_contests_country').css('border', '1px solid green');
                }
            
                var comment = $('.demo_contests_comment').val();
                if(comment.length === 0){
                    show_alert('alert-danger', 'Please provide comment.');
                    $('.demo_contests_comment').css('border', '1px solid red');
                    return false;
                }else{
                    $('.demo_contests_comment').css('border', '1px solid green');
                }
            
                if(rating === 0){
                    show_alert('alert-danger', 'Please provide rating.');
                    return false;
                }
            
                var values = {
                    demo_contests_id: demo_contests_id,
                    name: name,
                    user_email: email,
                    country: country,
                    rating: rating,
                    comment: comment,
                };
                var url = '<?php echo Yii::app()->getBaseUrl(true);?>/democontestsreview/UsersReviewInsert'
                
                $.ajax({
                    type: "POST",
                    url: url,
                    data: values,
                    success: function(result){
                        var response = JSON.parse(result);
                        if(response.status === 'failed'){
                            show_alert('alert-danger', response.message);
                        }else{
                            show_alert('alert-success', response.message);
                            $('#demo_contests_name').val('');
                            $('#demo_contests_email').val('');
                            $('#demo_contests_country').val('');
                            $('.demo_contests_comment').val('');
                            $('#characters_left').text('1000 characters left');
                            rating = 0;
                        }
                    },
                });        
            });

            $("#live_contests_detail_reviews").submit(function(e) {
                e.preventDefault();
                var live_contests_id = $('#live_contests_id').val();
            
                var name = $('#live_contests_name').val();
                if(name.length === 0){
                    show_alert('alert-danger', 'Please provide name.');
                    $('#live_contests_name').css('border', '1px solid red');
                    return false;
                }else{
                    $('#live_contests_name').css('border', '1px solid green');
                }
            
                var email = $('#live_contests_email').val();
                if(email.length === 0){
                    show_alert('alert-danger', 'Please provide email.');
                    $('#live_contests_email').css('border', '1px solid red');
                    return false;
                }else{
                    let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    if (re.test(email) === false) {
                        show_alert('alert-danger', 'Please provide valid email.');
                        $('#live_contests_email').css('border', '1px solid red');
                        return false;
                    }else{
                        $('#live_contests_email').css('border', '1px solid green');
                    }                
                }
            
                var country = $('#live_contests_country').val();
                if(country.length === 0){
                    show_alert('alert-danger', 'Please select country.');
                    $('#live_contests_country').css('border', '1px solid red');
                    return false;
                }else{
                    $('#live_contests_country').css('border', '1px solid green');
                }
            
                var comment = $('.live_contests_comment').val();
                if(comment.length === 0){
                    show_alert('alert-danger', 'Please provide comment.');
                    $('.live_contests_comment').css('border', '1px solid red');
                    return false;
                }else{
                    $('.live_contests_comment').css('border', '1px solid green');
                }
            
                if(rating === 0){
                    show_alert('alert-danger', 'Please provide rating.');
                    return false;
                }
            
                var values = {
                    live_contests_id: live_contests_id,
                    name: name,
                    user_email: email,
                    country: country,
                    rating: rating,
                    comment: comment,
                };
                var url = '<?php echo Yii::app()->getBaseUrl(true);?>/livecontestsreview/UsersReviewInsert'
                
                $.ajax({
                    type: "POST",
                    url: url,
                    data: values,
                    success: function(result){
                        var response = JSON.parse(result);
                        if(response.status === 'failed'){
                            show_alert('alert-danger', response.message);
                        }else{
                            show_alert('alert-success', response.message);
                            $('#live_contests_name').val('');
                            $('#live_contests_email').val('');
                            $('#live_contests_country').val('');
                            $('.live_contests_comment').val('');
                            $('#characters_left').text('1000 characters left');
                            rating = 0;
                        }
                    },
                });        
            });
            
            $('#comment_text').keyup(updateCount);
            $('#comment_text').keydown(updateCount);
            
            function updateCount() {
                var cs = [1000- $(this).val().length];
                if(cs <= 0){
                      $('#comment_text').val($(this).val().substring(0, 1000));
                      cs = [1000- $(this).val().length];
                }
                $('#characters_left').text(cs + ' characters left');
            }
            
            function show_alert(alert_class, message) {
                var html = '<div class="alert ' +alert_class+ ' alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+ message+'</div>';
                $('#alert-box').html(html);
            }
            
            $('.collapse').on('shown.bs.collapse', function(){
                $(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
                }).on('hidden.bs.collapse', function(){
                $(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
            });
            
        </script>
        <!-- page -->


<script type="text/javascript">
            
$(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";
    var postsCount = 1;

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

    function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
        }
    }

});
            
        </script>
        
    </body>
</html>