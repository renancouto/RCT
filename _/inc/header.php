<h1 class="logo">
	<a href="<?php echo get_option('home'); ?>/">
		<img src="<?php bloginfo('template_directory'); ?>/_/img/logo.png" width="29" height="35">
		<?php bloginfo('name'); ?>
	</a>
</h1>

<h2 class="slogan"><?php bloginfo('description'); ?></h2>

<nav class="main-nav" id="main-nav">
	<?php wp_nav_menu (array ( 'theme_location' => 'main-nav-menu', 'container' => '', 'items_wrap' => '<ul>%3$s</ul>') ); ?>
</nav>