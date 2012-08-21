<?php /* Template Name: Portfolio Index */ ?>
<?php remove_filter ('the_content', 'wpautop'); ?>
<?php get_header(); ?>

<section class="main-content updatable" id="main-content">
	<ul class="grid-list group">
	<?php
	$my_wp_query = new WP_Query();
	$all_wp_pages = $my_wp_query -> query(array('post_type' => 'page'));
	$portfolio = get_page_by_title('Portfolio');
	$portfolio_children = get_page_children($portfolio -> ID, $all_wp_pages);
	
	foreach ($portfolio_children as $item) {
		$id = $item -> ID;
		$title = $item -> post_title;
		$url = $item -> post_name;
		$thumbnail = get_post_meta($id, 'thumbnail', $single = true);
	?>
		<li>
			<a class="item" href="portfolio/<?php echo $url ?>">
				<div class="tooltip"><span><?php echo $title ?></span></div>
				<img src="<?php echo $thumbnail ?>">
			</a>
		</li>
	<?php } ?>
	</ul>
</section>

<?php get_footer(); ?>
