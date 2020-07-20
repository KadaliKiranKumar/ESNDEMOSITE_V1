<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package esn
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="keywords" content=""/>
    
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon2.png"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">

    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic'
        rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet'
          type='text/css'>
    <link
        href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>

    <!--[if IE 9]>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie9.css">
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- ######### CSS STYLES ######### -->
<!--<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/compress.css" type="text/css"/>-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css"/>

    <!-- font awesome icons -->
    <link rel="stylesheet"
          href="<?php echo get_template_directory_uri(); ?>/css/font-awesome//css/font-awesome.min.css">

    <!-- simple line icons -->
    <link rel="stylesheet" type="text/css"
          href="<?php echo get_template_directory_uri(); ?>/css/simpleline-icons/simple-line-icons.css" media="screen"/>

    <!-- et linefont icons -->
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/et-linefont/etlinefont.css">

    <!-- animations -->
    <link href="<?php echo get_template_directory_uri(); ?>/js/animations/css/animations.min.css" rel="stylesheet"
          type="text/css" media="all"/>

    <!-- responsive devices styles -->
   <link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/css/responsive-leyouts.css"
          type="text/css"/>

    <!-- shortcodes -->
    <link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/css/shortcodes.css"
          type="text/css"/>


    <!-- mega menu -->
   <link href="<?php echo get_template_directory_uri(); ?>/js/mainmenu/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/js/mainmenu/demo.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/js/mainmenu/menu.css" rel="stylesheet">

    <!-- owl carousel -->
  <!--  <link href="<?php echo get_template_directory_uri(); ?>/js/carouselowl/owl.transitions.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/js/carouselowl/owl.carousel.css" rel="stylesheet">-->
	<!--[if lt IE 9]>
	<style>
	.site_wrapper{
	display:none;
	}
	.ie-message{
		display:block;
		margin:100px;
		background-color:#980031;
		color:#ffffff;
	}
	.ie-message h1{
		color:#ffffff;
		padding:50px;
	}
	</style>
    <![endif]-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-79220678-1', 'auto');
  ga('send', 'pageview');

</script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="ie-message">
<h1>Looks like you are using unsafe and outdated browser. Update your browser to get most of this website.</h1>

</div>
<div class="site_wrapper">
     <div class="top_nav">
                <div class="container">

                    <div class="left">

                      
                    </div><!-- end left -->

                    <div class="right">
					<ul class="topsocial">
                            <li><?php echo get_search_form(); ?><li>
						    <li><a href="https://www.facebook.com/pages/ESN-Technologies-Pvt-LTD/248716975163116"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://www.linkedin.com/in/esn-tecnlogies-2a5032124"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://twitter.com/everestinc"><i class="fa fa-twitter"></i></a></li>
			                
                    </ul>
                        <a href="/careers/" class="tpbut two active"><i class="fa fa-pencil-square-o"></i>&nbsp; Apply For Jobs</a>
                        <a href="/contact-us/" class="tpbut"><i class="fa fa-pencil-square-o"></i>&nbsp; Request For Services</a>

                        

                    </div><!-- end right -->

                </div>
     </div><!-- end top navigation links -->
     <div class="clearfix"></div>
   
    <header class="header innerpages">

        <div class="container">

            <!-- Logo -->
            <div class="logo"><a href="<?php echo esc_url(home_url('/')); ?>" id="logo"></a></div>

            <!-- Navigation Menu -->
            <div class="menu_main">

                <div class="navbar yamm navbar-default">

                    <div class="navbar-header">
                        <div class="navbar-toggle .navbar-collapse .pull-right " data-toggle="collapse"
                             data-target="#navbar-collapse-1"><span>Menu</span>
                            <button type="button"><i class="fa fa-bars"></i></button>
                        </div>
                    </div>

                    <div id="navbar-collapse-1" class="navbar-collapse collapse pull-right">

                        <nav>
                            <?php wp_nav_menu(array('menu' => 'main', 'container' => '', 'menu_class' => 'nav navbar-nav')); ?>

                        </nav>
                            
                    </div>

                </div>
            </div>
            <!-- end Navigation Menu -->


        </div>

    </header>