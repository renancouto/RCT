<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
			  if (function_exists('is_tag') && is_tag()) {
				 single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
			  elseif (is_archive()) {
				 wp_title(''); echo ' Archive - '; }
			  elseif (is_search()) {
				 echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
			  elseif (!(is_404()) && (is_single()) || (is_page() && !is_front_page())) {
				 wp_title(''); echo ' - '; }		      
			  elseif (is_404()) {
				 echo 'Not Found - '; }
			  if (is_home()) {
				 bloginfo('name'); echo ' - '; bloginfo('description'); }
			  else {
				  bloginfo('name'); }
			  if ($paged>1) {
				 echo ' - page '. $paged; }
		   ?>
	</title>
	
	<meta name="title" content="<?php
			  if (function_exists('is_tag') && is_tag()) {
				 single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
			  elseif (is_archive()) {
				 wp_title(''); echo ' Archive - '; }
			  elseif (is_search()) {
				 echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
			  elseif (!(is_404()) && (is_single()) || (is_page() && !is_front_page())) {
				 wp_title(''); echo ' - '; }
			  elseif (is_404()) {
				 echo 'Not Found - '; }
			  if (is_home()) {
				 bloginfo('name'); echo ' - '; bloginfo('description'); }
			  else {
				  bloginfo('name'); }
			  if ($paged>1) {
				 echo ' - page '. $paged; }
		   ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">	
	<meta name="google-site-verification" content="googlea35d3a24b1f5905e.html">	
	<meta name="author" content="Renan Couto">
	
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">		 
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/_/img/apple-touch-icon.png">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<script>
	WebFontConfig = {
		google: { families: ['Exo:200,500,700,500italic,700italic,200italic:latin'] }
	};
	(function() {
		var wf = document.createElement('script');
			wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
			wf.type = 'text/javascript';
			wf.async = 'true';
		var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(wf, s);
	})();
	</script>
	
	<script src="<?php bloginfo('template_directory'); ?>/_/js/libs/modernizr-2.5.3.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/_/js/libs/browsr-0.2.js"></script>
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>

	<script>
	var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-34287307-1']);
		_gaq.push(['_setDomainName', 'renancouto.com']);
		_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>
</head>

<body <?php body_class(); ?>>	
	<div id="wrapper" class="main-wrapper">
		<header class="main-header">
			<h1 class="logo">
				<a href="<?php echo get_option('home'); ?>/">
					<img src="<?php bloginfo('template_directory'); ?>/_/img/logo.png" width="29" height="35">
					<?php bloginfo('name'); ?>
				</a>
			</h1>
			
			<h2 class="slogan"><?php bloginfo('description'); ?></h2>
			
			<nav class="main-nav updatable" id="main-nav">
				<?php wp_nav_menu (array ( 'theme_location' => 'main-nav-menu', 'container' => '', 'items_wrap' => '<ul>%3$s</ul>') ); ?>
			</nav>
		</header>