<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="icon" type="image/png" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.png">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
            folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/_all-skins.min.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery-ui.min.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.ultraselect.min.css">
        <!-- jQuery 2.2.3 -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-2.2.3.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.ultraselect.min.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">
            .button-column img {
            margin: 5px 5px;
            }
        </style>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <?php $url = Yii::app()->controller->getId().'/'.Yii::app()->controller->getAction()->getId(); ?>
            <header class="main-header">
                <!-- Logo -->
                <a href="#" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>A</b>LT</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>TopAsisFx</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/user_images/avatar5.png" class="user-image" alt="User Image">
                                <span class="hidden-xs">Roman Sharif</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/user_images/avatar5.png" class="img-circle" alt="User Image">
                                        <p>
                                            Roman Sharif - Web Developer
                                            <small>Member since Mar. 2017</small>
                                        </p>
                                    </li>
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="<?php echo Yii::app()->createAbsoluteUrl('user/view/'.Yii::app()->user->getId()); ?>" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo Yii::app()->createAbsoluteUrl('site/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/user_images/avatar5.png" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Roman Sharif</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="<?php if(strpos($url, 'dashboard/admin') !== false){ echo 'active ';}?>treeview">
                            <a href="<?php echo Yii::app()->createAbsoluteUrl('dashboard/admin'); ?>">
                            <i class="fa fa-dashboard"></i> Dashboard
                            </a>
                        </li>
                        <li class="<?php if(strpos($url, 'user') !== false && strpos($url, 'usersreview') === false){ echo 'active ';}?> treeview">
                            <a href="#">
                            <i class="fa fa-users"></i>
                            <span>Users</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="<?php if(strpos($url, 'user/view') !== false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('user/view/'.Yii::app()->user->getId()); ?>"><i class="fa fa-circle-o"></i> Profile</a></li>
                                <li class="<?php if(strpos($url, 'user/update') !== false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('user/update/'.Yii::app()->user->getId()); ?>"><i class="fa fa-circle-o"></i> Update Profile</a></li>
                                <?php if(Yii::app()->user->isAdmin()){?>
                                <li class="<?php if(strpos($url, 'user/admin') !== false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('user/admin'); ?>"><i class="fa fa-circle-o"></i> Manage Users</a></li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li class="<?php if((strpos($url, 'brokers') !== false) || strpos($url, 'usersreview') !== false){ echo 'active ';}?> treeview">
                            <a href="#">
                            <i class="fa fa-users"></i>
                            <span>Brokers</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="<?php if(strpos($url, 'brokers/create/') !== false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('brokers/create/'); ?>"><i class="fa fa-circle-o"></i> Create Broker</a></li>
                                <li class="<?php if(strpos($url, 'brokers/admin') !== false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('brokers/admin'); ?>"><i class="fa fa-circle-o"></i> Manage Brokers</a></li>
                                <li class="<?php if(strpos($url, 'usersreview/admin') !== false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('usersreview/admin'); ?>"><i class="fa fa-circle-o"></i> Broker Reviews</a></li>
                            </ul>
                        </li>
                        <li class="<?php if((strpos($url, 'depositbonuses') !== false || strpos($url, 'depositbonusesreview') !== false || strpos($url, 'depositbonussuggestions') !== false) && strpos($url, 'nodepositbonus') === false){ echo 'active ';}?> treeview">
                            <a href="#">
                            <i class="fa fa-users"></i>
                            <span>Deposit Bonus</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="<?php if(strpos($url, 'depositbonuses/create') !== false && strpos($url, 'nodepositbonus') === false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('depositbonuses/create'); ?>"><i class="fa fa-circle-o"></i> Create Dep. Bonus</a></li>
                                <li class="<?php if(strpos($url, 'depositbonuses/admin') !== false && strpos($url, 'nodepositbonus') === false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('depositbonuses/admin'); ?>"><i class="fa fa-circle-o"></i> Manage Dep. Bonus</a></li>
                                <li class="<?php if(strpos($url, 'depositbonusesreview/admin') !== false && strpos($url, 'nodepositbonus') === false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('depositbonusesreview/admin'); ?>"><i class="fa fa-circle-o"></i> Dep. Bonus Reviews</a></li>
                                <li class="<?php if(strpos($url, 'depositbonussuggestions/admin') !== false && strpos($url, 'nodepositbonus') === false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('depositbonussuggestions/admin'); ?>"><i class="fa fa-circle-o"></i> Dep. Bonus Suggestions</a></li>
                            </ul>
                        </li>
                        <li class="<?php if(strpos($url, 'nodepositbonuses') !== false || strpos($url, 'nodepositbonusesreview') !== false || strpos($url, 'nodepositbonussuggestions') !== false){ echo 'active ';}?> treeview">
                            <a href="#">
                            <i class="fa fa-users"></i>
                            <span>No Deposit Bonus</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="<?php if(strpos($url, 'nodepositbonuses/create') !== false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('nodepositbonuses/create'); ?>"><i class="fa fa-circle-o"></i> Create No Dep. Bonus</a></li>
                                <li class="<?php if(strpos($url, 'nodepositbonuses/admin') !== false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('nodepositbonuses/admin'); ?>"><i class="fa fa-circle-o"></i> Manage No Dep. Bonus</a></li>
                                <li class="<?php if(strpos($url, 'nodepositbonusesreview/admin') !== false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('nodepositbonusesreview/admin'); ?>"><i class="fa fa-circle-o"></i> No Dep. Bonus Reviews</a></li>
                                <li class="<?php if(strpos($url, 'nodepositbonussuggestions/admin') !== false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('nodepositbonussuggestions/admin'); ?>"><i class="fa fa-circle-o"></i> No Dep. Bonus Suggestions</a></li>
                            </ul>
                        </li>
                        <li class="<?php if((strpos($url, 'pagecontent') !== false)){ echo 'active ';}?> treeview">
                            <a href="#">
                            <i class="fa fa-users"></i>
                            <span>Page Content</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="<?php if(strpos($url, 'pagecontent/create') !== false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('pagecontent/create'); ?>"><i class="fa fa-circle-o"></i> Create Page Content</a></li>
                                <li class="<?php if(strpos($url, 'pagecontent/admin') !== false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('pagecontent/admin'); ?>"><i class="fa fa-circle-o"></i> Manage Page Content</a></li>
                            </ul>
                        </li>
                        <li class="<?php if((strpos($url, 'democontest') !== false || strpos($url, 'democontestsreview') !== false || strpos($url, 'democontestssuggestion') !== false)){ echo 'active ';}?> treeview">
                            <a href="#">
                            <i class="fa fa-users"></i>
                            <span>Demo Contests</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="<?php if(strpos($url, 'democontest/create') !== false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('democontest/create'); ?>"><i class="fa fa-circle-o"></i> Create Demo Contest</a></li>
                                <li class="<?php if(strpos($url, 'democontest/admin') !== false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('democontest/admin'); ?>"><i class="fa fa-circle-o"></i> Manage Demo Contest</a></li>
                                <li class="<?php if(strpos($url, 'democontestsreview/admin') !== false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('democontestsreview/admin'); ?>"><i class="fa fa-circle-o"></i> Demo Contest Reviews</a></li>
                                <li class="<?php if(strpos($url, 'democontestsuggestions/admin') !== false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('democontestssuggestion/admin'); ?>"><i class="fa fa-circle-o"></i> Demo Contest Suggestions</a></li>
                            </ul>
                        </li>
                        <li class="<?php if((strpos($url, 'livecontest') !== false || strpos($url, 'livecontestsreview') !== false || strpos($url, 'livecontestssuggestion') !== false)){ echo 'active ';}?> treeview">
                            <a href="#">
                            <i class="fa fa-users"></i>
                            <span>Live Contests</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="<?php if(strpos($url, 'livecontest/create') !== false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('livecontest/create'); ?>"><i class="fa fa-circle-o"></i> Create Live Contest</a></li>
                                <li class="<?php if(strpos($url, 'livecontest/admin') !== false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('livecontest/admin'); ?>"><i class="fa fa-circle-o"></i> Manage Live Contest</a></li>
                                <li class="<?php if(strpos($url, 'livecontestsreview/admin') !== false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('livecontestsreview/admin'); ?>"><i class="fa fa-circle-o"></i> Live Contest Reviews</a></li>
                                <li class="<?php if(strpos($url, 'livecontestsuggestions/admin') !== false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('livecontestssuggestion/admin'); ?>"><i class="fa fa-circle-o"></i> live Contest Suggestions</a></li>
                            </ul>
                        </li>
                        <li class="<?php if(strpos($url, 'bannersettings') !== false){ echo 'active ';}?> treeview">
                            <a href="">
                            <i class="fa fa-users"></i>
                            <span>Banner Settings</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="<?php if(strpos($url, 'bannersettings/create') !== false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('bannersettings/create'); ?>"><i class="fa fa-circle-o"></i> Create Banner Settings</a></li>
                                <li class="<?php if(strpos($url, 'bannersettings/admin') !== false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('bannersettings/admin'); ?>"><i class="fa fa-circle-o"></i> Manage Banner Settings</a></li>
                            </ul>
                        </li>
                        <li class="<?php if(strpos($url, 'faqs') !== false){ echo 'active ';}?> treeview">
                            <a href="">
                            <i class="fa fa-users"></i>
                            <span>Faqs Settings</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="<?php if(strpos($url, 'faqs/create') !== false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('faqs/create'); ?>"><i class="fa fa-circle-o"></i> Create Faqs</a></li>
                                <li class="<?php if(strpos($url, 'faqs/admin') !== false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('faqs/admin'); ?>"><i class="fa fa-circle-o"></i> Manage Faqs</a></li>
                            </ul>
                        </li>
                        <li class="<?php if(strpos($url, 'categories') !== false || strpos($url, 'posts') !== false){ echo 'active ';}?> treeview">
                            <a href="">
                            <i class="fa fa-users"></i>
                            <span>Blog Settings</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="<?php if(strpos($url, 'categories/create') !== false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('categories/create'); ?>"><i class="fa fa-circle-o"></i> Create Category</a></li>
                                <li class="<?php if(strpos($url, 'categories/admin') !== false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('categories/admin'); ?>"><i class="fa fa-circle-o"></i> Manage Category</a></li>
                                <li class="<?php if(strpos($url, 'posts/create') !== false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('posts/create'); ?>"><i class="fa fa-circle-o"></i> Create Post</a></li>
                                <li class="<?php if(strpos($url, 'posts/admin') !== false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('posts/admin'); ?>"><i class="fa fa-circle-o"></i> Manage Posts</a></li>
                                <li class="<?php if(strpos($url, 'postsreview/admin') !== false){ echo 'active ';}?> "><a href="<?php echo Yii::app()->createAbsoluteUrl('postsreview/admin'); ?>"><i class="fa fa-circle-o"></i> Posts Reviews</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <!-- <section class="content-header">
                    <h1>
                      Dashboard
                      <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                      <li class="active">Dashboard</li>
                    </ol>
                    </section> -->
                <!-- Main content -->
                <section class="content">
                    <?php if(isset($this->breadcrumbs)):?>
                    <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                        'links'=>$this->breadcrumbs,
                        )); ?><!-- breadcrumbs -->
                    <?php endif?>
                    <?php echo $content; ?>
                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-7 connectedSortable">
                        </section>
                        <!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-5 connectedSortable">
                            <!-- Map box -->
                        </section>
                        <!-- right col -->
                    </div>
                    <!-- /.row (main row) -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0.0
                </div>
                <strong>Copyright &copy; 2016 <a target="_blank" href="https://www.linkedin.com/in/masud-moni-5a1040a2?trk=hp-identity-name">Masud Moni</a>.</strong> All rights
                reserved.
            </footer>
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">
                        <h3 class="control-sidebar-heading">Recent Activity</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                                        <p>Will be 23 on April 24th</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-user bg-yellow"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                                        <p>New phone +1(800)555-1234</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                                        <p>nora@example.com</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-file-code-o bg-green"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                                        <p>Execution time 5 seconds</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- /.control-sidebar-menu -->
                        <h3 class="control-sidebar-heading">Tasks Progress</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Custom Template Design
                                        <span class="label label-danger pull-right">70%</span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Update Resume
                                        <span class="label label-success pull-right">95%</span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Laravel Integration
                                        <span class="label label-warning pull-right">50%</span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Back End Framework
                                        <span class="label label-primary pull-right">68%</span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- /.control-sidebar-menu -->
                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    <!-- Settings tab content -->
                    <div class="tab-pane" id="control-sidebar-settings-tab">
                        <form method="post">
                            <h3 class="control-sidebar-heading">General Settings</h3>
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                Report panel usage
                                <input type="checkbox" class="pull-right" checked>
                                </label>
                                <p>
                                    Some information about this general settings option
                                </p>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                Allow mail redirect
                                <input type="checkbox" class="pull-right" checked>
                                </label>
                                <p>
                                    Other sets of options are available
                                </p>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                Expose author name in posts
                                <input type="checkbox" class="pull-right" checked>
                                </label>
                                <p>
                                    Allow the user to show his name in blog posts
                                </p>
                            </div>
                            <!-- /.form-group -->
                            <h3 class="control-sidebar-heading">Chat Settings</h3>
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                Show me as online
                                <input type="checkbox" class="pull-right" checked>
                                </label>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                Turn off notifications
                                <input type="checkbox" class="pull-right">
                                </label>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                Delete chat history
                                <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                                </label>
                            </div>
                            <!-- /.form-group -->
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->
        <!-- jQuery UI 1.11.4 -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
            $('.delete').click(function(e) {
              e.preventDefault();
              var r = confirm("Are you sure you want to delete?");
              if (r == true) {      
                window.location.href = "<?php echo Yii::app()->request->getBaseUrl(true); ?>"+$(this).attr("href");
              } 
            });
        </script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/js/bootstrap.min.js"></script>
        <!-- Morris.js charts -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/raphael-min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/moment.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap3-wysihtml5.all.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/app.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/demo.js"></script>
    </body>
</html>