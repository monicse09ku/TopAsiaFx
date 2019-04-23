<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="yandex-verification" content="4b61399d3e4127b5" />
        <meta name="msvalidate.01" content="E4632F0C5516A71C5CD7B9EA0540A633" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="language" content="en">
        <meta name="author" content="Masud Moni">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="<?php echo Yii::app()->session['meta_description'];?>">
        <meta name="thumbnail" content="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/logo.png" />
        <meta property="og:url" content="<?php echo Yii::app()->request->getBaseUrl(true).Yii::app()->request->requestUri; ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="<?php echo Yii::app()->session['meta_title'];?>" />
        <meta property="og:description" content="<?php echo Yii::app()->session['meta_description'];?>">
        <meta property="og:image" content="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/logo.png" />
        <meta name="google-site-verification" content="RKe5Js21ZUJ6YI4i18AFiVNMaOQ0Ko1Axi7c_6Ms2WA" />
        <title><?php echo Yii::app()->session['title'];?></title>
        <link rel="canonical" href="<?php echo Yii::app()->getBaseUrl(true).Yii::app()->request->requestUri;?>" />
        <link rel="icon" type="image/png" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.png">
        <link rel="alternate" href="https://www.topasiafx.com/" hreflang="en-US"/>
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery-ui.min.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/data_table.css">
        <!--[if lt IE 8]>
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen,projection">
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
        <div class="main_nav">
            <nav id="topbar" class="navbar navbar-default navbar-fixed-top clear-header">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button> <a class="navbar-brand" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>"><img alt="logo" src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/Top-Asia-Fx.png"></a>
                    </div>
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
                </div>
            </nav>
        </div>

        <?php echo $content; ?>
        <div class="clear"></div>
        <!--<div class="container">
            <div id="footer">Copyright ©
                <?php echo date('Y'); ?>by TopAsiaFx.
                    <br/>All Rights Reserved.
                    <br/>
            </div>
            </div>-->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-2.2.3.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/data_table.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jssocials.min.js"></script>
        <?php if(Yii::app()->request->requestUri == '/') { ?>
        <script type="text/javascript">
            $(window).load(function(){        
              $('#myModal').modal('show');
              setTimeout(function(){ 
                $('#myModal').modal('hide');
              }, 15000);
            });
        </script>
        <?php } ?>
        <script>
            /* social share */
            $("#share").jsSocials({
                text: "<?php echo Yii::app()->session['meta_description'];?>",
                shares: ["twitter", "facebook", "googleplus", "linkedin", "pinterest"],
                showLabel: false,
                showCount: false,
            });
            
            /* image responsive */
            $("img").removeClass("img img-responsive");
            $("img").addClass("img img-responsive");
            $(".broker_grid_image").removeClass("img img-responsive");
            $(".broker_sidebar_images").removeClass("img img-responsive");
            
            /* navbar transition */
            $.widget.bridge("uibutton", $.ui.button), $(document).ready(function() {
                $(window).scroll(function() {
                    $(window).scrollTop() < 100 ? ifLessScroll() : ifMoreScroll()
                })
            })

            function ifLessScroll(){
                $("#topbar").css({
                    padding: "22px 0"
                })
                $("#topbar1").css({
                    "margin-top": "94px"                  
                })
            }

            function ifMoreScroll() {
                $("#topbar").css({
                    padding: "0",
                    transition: "1s"
                })
                $("#topbar1").css({
                    "margin-top": "50px",
                    transition: "1s"                
                })
            }
            
            function toggler() {
                $("#advertiser_disclosure").hasClass("hidden") ? $("#advertiser_disclosure").removeClass("hidden") : $("#advertiser_disclosure").addClass("hidden")
            }
            
            /* Data table */
            var score = "",
                deposit = "",
                spreads = "",
                education = "";
            
            $.fn.dataTable.ext.search.push(function(e, s, t) {
                if (!(score || deposit || spreads || education)) return !0;
                if (score) {
                    if (parseInt(s[5]) > score) return !0
                } else if (deposit) {
                    if (s[7].indexOf(deposit) >= 0) return !0
                } else if (spreads) {
                    if (parseInt(s[4]) < spreads) return !0
                } else if (education && s[8].indexOf(education) >= 0) return !0;
                return !1
            }), 

            $(document).ready(function() {
                $('[data-toggle="tooltip"]').tooltip({
                    html: !0
                });
                var e = $("#example").DataTable({
                    paging: !1,
                    bInfo: !1
                });
                $("#score_select, #deposit_select, #spreads_select, #education_select").change(function() {
                    score = $("#score_select").val(), deposit = $("#deposit_select").val(), spreads = $("#spreads_select").val(), education = $("#education_select").val(), e.draw(), $("#score_select").val(""), $("#deposit_select").val(""), $("#spreads_select").val(""), $("#education_select").val("")
                }), $(".carousel").carousel(), $(".grid_score:first").css("background", "url(../images/user_ranking_first.png) no-repeat")

                ResCarouselSize();
            })
            
            /* faqs collapse */
            $('.collapse').on('shown.bs.collapse', function(){
                $(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
                }).on('hidden.bs.collapse', function(){
                $(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
            });
            
            /* star rating */
            var rating = 0;
            $('.star_rating input').click(function(){
                rating = $(this).val();
            });
            
            $("#broker_rating_form").submit(function(e) {
                e.preventDefault();
                var broker_id = $('#broker_id').val();
            
                var name = $('#broker_rating_form_name').val();
                if(name.length === 0){
                    show_alert('alert-danger', 'Please provide name.');
                    $('#broker_rating_form_name').css('border', '1px solid red');
                    return false;
                }else{
                    $('#broker_rating_form_name').css('border', '1px solid green');
                }
            
                var email = $('#broker_rating_form_email').val();
                if(email.length === 0){
                    show_alert('alert-danger', 'Please provide email.');
                    $('#broker_rating_form_email').css('border', '1px solid red');
                    return false;
                }else{
                    let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    if (re.test(email) === false) {
                        show_alert('alert-danger', 'Please provide valid email.');
                        $('#broker_rating_form_email').css('border', '1px solid red');
                        return false;
                    }else{
                        $('#broker_rating_form_email').css('border', '1px solid green');
                    }                
                }
            
                var mobile = $('#broker_rating_form_cell_no').val();
                var country = $('#broker_rating_form_country').val();
                if(country.length === 0){
                    show_alert('alert-danger', 'Please select country.');
                    $('#broker_rating_form_country').css('border', '1px solid red');
                    return false;
                }else{
                    $('#broker_rating_form_country').css('border', '1px solid green');
                }
            
                var comment = $('.broker_rating_form_comment_text').val();
                if(comment.length === 0){
                    show_alert('alert-danger', 'Please provide comment.');
                    $('.broker_rating_form_comment_text').css('border', '1px solid red');
                    return false;
                }else{
                    $('.broker_rating_form_comment_text').css('border', '1px solid green');
                }
            
                if(rating === 0){
                    show_alert('alert-danger', 'Please provide rating.');
                    return false;
                }
            
                var values = {
                    broker_id: broker_id,
                    name: name,
                    user_email: email,
                    country: country,
                    cell_no: mobile,
                    rating: rating,
                    comment: comment,
                };
                var url = '<?php echo Yii::app()->getBaseUrl(true);?>/Usersreview/UsersReviewInsert'
                
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
                            $('#broker_rating_form_name').val('');
                            $('#broker_rating_form_email').val('');
                            $('#broker_rating_form_cell_no').val('');
                            $('#broker_rating_form_country').val('');
                            $('.broker_rating_form_comment_text').val('');
                            $('#characters_left').text('1000 characters left');
                            rating = 0;
                        }
                    },
                });        
            });

            $("#post_rating_form").submit(function(e) {
                e.preventDefault();
                var post_id = $('#post_id').val();
            
                var name = $('#post_rating_form_name').val();
                if(name.length === 0){
                    show_alert('alert-danger', 'Please provide name.');
                    $('#post_rating_form_name').css('border', '1px solid red');
                    return false;
                }else{
                    $('#post_rating_form_name').css('border', '1px solid green');
                }
            
                var email = $('#post_rating_form_email').val();
                if(email.length === 0){
                    show_alert('alert-danger', 'Please provide email.');
                    $('#post_rating_form_email').css('border', '1px solid red');
                    return false;
                }else{
                    let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    if (re.test(email) === false) {
                        show_alert('alert-danger', 'Please provide valid email.');
                        $('#post_rating_form_email').css('border', '1px solid red');
                        return false;
                    }else{
                        $('#post_rating_form_email').css('border', '1px solid green');
                    }                
                }
            
                var country = $('#post_rating_form_country').val();
                if(country.length === 0){
                    show_alert('alert-danger', 'Please select country.');
                    $('#post_rating_form_country').css('border', '1px solid red');
                    return false;
                }else{
                    $('#post_rating_form_country').css('border', '1px solid green');
                }
            
                var comment = $('.post_rating_form_comment_text').val();
                if(comment.length === 0){
                    show_alert('alert-danger', 'Please provide comment.');
                    $('.post_rating_form_comment_text').css('border', '1px solid red');
                    return false;
                }else{
                    $('.post_rating_form_comment_text').css('border', '1px solid green');
                }
            
                var values = {
                    post_id: post_id,
                    name: name,
                    user_email: email,
                    country: country,
                    comment: comment,
                };
                var url = '<?php echo Yii::app()->getBaseUrl(true);?>/Postsreview/UsersReviewInsert'
                
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
                            $('#post_rating_form_name').val('');
                            $('#post_rating_form_email').val('');
                            $('#post_rating_form_country').val('');
                            $('.post_rating_form_comment_text').val('');
                            $('#characters_left').text('1000 characters left');
                        }
                    },
                });        
            });

            $('.load-more-button').click(function(){        
        
                var cat = getUrlParameter('cat');
                if(cat !== 'undefined'){
                    var data = { postsCount: postsCount, category: cat };
                }else{
                    var data = { postsCount: postsCount };
                }
                
                var url = '<?php echo Yii::app()->getBaseUrl(true);?>/posts/LoadMorePosts';
                
                $.ajax({
                    type: "POST",
                    url: url,
                    data: data,
                    success: function(result){
                        var response = JSON.parse(result);

                        $(".post-div:last").after(response.result_html);

                        if(response.hideLoader === 'true'){
                            $('.load-more-button').hide();
                        }
                        
                    },
                });


              
                postsCount++;
            })
            
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
            
            /* top floating div */
            /*$(document).scroll(function () {
                var y = $(this).scrollTop();
                if (y > 800) {
                    $('.topFloatingDiv').fadeIn();
                } else {
                    $('.topFloatingDiv').fadeOut();
                }
            
            });*/

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

            
        </script>
        <script type="application/ld+json">
            {
              "@context": "http://schema.org/", 
              "@type": "Product", 
              "name": "TopAsiaFX",
              "image": "https://www.topasiafx.com/images/logo.png",
              "description": "Trade with Asia top regulated and reputable online Forex broker. See details broker reviews and make your right decision instantly.",
              "brand": "TopAsiaFX",
              "offers": {
                
              },
              "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "9.5",
                "bestRating": "10",
                "worstRating": "1",
                "ratingCount": "1500",
                "reviewCount": "180"
              },
              "reviews": {
                "@context": "http://schema.org/",
                "@type": "Review",
                "name": "Details reviews",
                "reviewBody": "I think TopAsiaFX is the best place to find original and details information about of different online trading platforms in Asia.",
                "reviewRating": {
                  "@type": "Rating",
                  "ratingValue": "10",
                  "bestRating": "10",
                  "worstRating": "0"
                },
                "datePublished": "2018-09-03",
                "author": {"@type": "Person", "name": "Sharif Mohammad Ashik"},
                "publisher": {"@type": "Organization", "name": "TopAsiaFX"}
              }
            }
        </script>
    </body>
</html>