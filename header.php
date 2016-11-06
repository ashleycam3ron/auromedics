<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-language" content="<?php bloginfo('language'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#000">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="author" content="<?php bloginfo('name'); ?>">
    <meta name="copyright" content="Copyright <?php bloginfo('name');?> <?php echo date('Y');?>. All Rights Reserved.">
    <meta name="dc.language" CONTENT="US">
	<meta name="dc.source" CONTENT="<?php echo esc_url( home_url() ) ?>">
	<meta name="dc.title" CONTENT="<?php echo wp_title(); ?>">
	<meta name="dc.subject" CONTENT="<?php bloginfo('description');?>">
	<meta name="dc.creator" content="Ashley Cameron Design, Inc">
	<title><?php echo wp_title();?></title>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/favicon.ico" />
    <link rel="icon" sizes="192x192" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicon-192.png">
    <link rel="alternate" href="<?php echo esc_url( home_url() ) ?>" hreflang="en-us" />
    <link rel="image_src" href="<?php echo get_stylesheet_directory_uri() ?>/images/AuroMedics-Pharma-LLC-Logo.png" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<!-- Rotis Fonts -->
	<script type="text/javascript">
		var MTUserId='cd26a4c4-5658-4894-bbdd-0626e6f5fef3';
		var MTFontIds = new Array();
		MTFontIds.push("1138394"); // Rotis® Semi Serif W02 55 Regular
		MTFontIds.push("1461195"); // Rotis® Sans Serif W04 45 Light
		MTFontIds.push("1461197"); // Rotis® Sans Serif W04 46 Light Italic
		MTFontIds.push("1461199"); // Rotis® Sans Serif W04 55 Roman
		MTFontIds.push("1461203"); // Rotis® Sans Serif W04 65 Bold
		MTFontIds.push("1461219"); // Rotis® Serif W04 55 Roman
		MTFontIds.push("1461223"); // Rotis® Serif W04 65 Bold
		MTFontIds.push("1461231"); // Rotis® Semi Sans W04 45 Light
		MTFontIds.push("1461235"); // Rotis® Semi Sans W04 55 Regular
		MTFontIds.push("1461239"); // Rotis® Semi Sans W04 65 Bold
		MTFontIds.push("1461257"); // Rotis® Semi Serif W04 65 Bold
		(function() {
		var mtTracking = document.createElement('script');
		mtTracking.type='text/javascript';
		mtTracking.async='true';
		mtTracking.src='<?php echo get_stylesheet_directory_uri() ?>/js/mtiFontTrackingCode.js';
		(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(mtTracking);
		})();
	</script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<h3 class="hidden"><?php bloginfo('name')?> – <?php bloginfo('description');?></h3>

<header id="header" role="banner" class="col-sm-offset-4 col-md-offset-6">
	<span>Customer Service: <a class="tel" href="tel:888-238-7880">(888) 238-7880</a></span>
	<a href="<?php echo esc_url( home_url() ) ?>/careers">Careers</a>
<!--
	<h5 class="hidden">Social Navigation</h5>
	<?php wp_nav_menu( array('menu' => 'social')); ?>
-->
	<?php get_search_form(); ?>
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar top-bar"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>
    </button>
</header>
<div id="wrapper">
	<nav class="navbar navbar-fixed-top" id="sidebar-wrapper" role="navigation">
		<a class="navbar-brand" href="<?php echo esc_url( home_url() ) ?>">
			<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/AuroMedics-Pharma-LLC-Logo.png" alt="AuroMedics Pharma LLC Logo">
		</a>
    	<h2>Primary Navigation</h2>
		<div id="navbar" class="navbar-collapse collapse navbar-ex1-collapse">
		<?php wp_nav_menu( array(
			  'menu' => 'main',
			  'depth' => 2,
			  'container' => false,
			  'menu_class' => 'nav navbar-nav',
			  'walker' => new wp_bootstrap_navwalker())
			); ?>
		</div>
    </nav>