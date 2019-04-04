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
        
        <link rel="icon" type="image/png" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.png">
        
        <title><?php echo Yii::app()->session['meta_title'];?></title>

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css">
        
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome/css/font-awesome.min.css">
        
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
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
                            <li><a class="header_link" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/forex-deposit-bonuses">Deposit Bonuses</a></li>
                            <li><a class="header_link" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/forex-nodeposit-bonuses">No Deposit Bonuses</a></li>
                            <li><a class="header_link" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/demo-contests">Demo Contest</a></li>
                            <li><a class="header_link" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/live-contests">Live Contest</a></li>
                            <li><a class="header_link" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/about">About Us</a></li>
                            <li><a class="header_link" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/contact">Contact Us</a></li>
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

        $("#prospects_form").submit(function(e) {
            e.preventDefault();
            var values = {};
            var url_part = '<?php echo (Yii::app()->request->url == "/forex-deposit-bonuses") ? "depositbonussuggestions" : "nodepositbonussuggestions" ?>';
            var url = '<?php echo Yii::app()->getBaseUrl(true);?>/' + url_part + '/UsersSuggestionInsert';
            
            $.each($('#prospects_form').serializeArray(), function(i, field) {
                  values[field.name] = field.value;
            });
            
            $.ajax({
                  type: "POST",
                  url: url,
                  data: values,
                  success: function(result){
                      console.log(result);
                      $("#ajax_result").html(result);
                      $(".stars").addClass('hidden');
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

      $('.collapse').on('shown.bs.collapse', function(){
                    $(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
                    }).on('hidden.bs.collapse', function(){
                    $(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
                });

        </script>
        <!-- page -->
       
    </body>
</html>
