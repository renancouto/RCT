<?php /* Template Name: Portfolio Item */ ?>
<?php remove_filter ('the_content', 'wpautop'); ?>
<?php get_header(); ?>

<header class="main-header">
	<?php include (TEMPLATEPATH . '/_/inc/header.php' ); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<aside class="portfolio-item-info">
		<h1 class="heading">
			<span><?php the_title(); ?></span>
		</h1>
		
		<?php
			$id = $post -> ID;
			$about = get_post_meta($id, 'about', true);
			$release_date = get_post_meta($id, 'release date', true);
		?>
		
		<ul class="meta">
			<li class="about">
				<h3 class="title">About</h3>
				<p class="description"><?php echo $about ?></p>
			</li>
			
			<li class="release-date">
				<h3 class="title">Release date</h3>
				<p class="description"><?php echo $release_date ?></p>
			</li>
			
			<!-- <li class="tags">
				<h3 class="title">Tags</h3>
				<p class="description"><?php the_tags(''); ?></p>
			</li> -->			
		</ul>

		<?php include (TEMPLATEPATH . '/_/inc/social.php' ); ?>
	</aside>
	<?php endwhile; endif; ?>
</header>

<section class="main-content" id="main-content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article class="portfolio-item">		
		<div class="content">
			<?php the_content(); ?>
		</div>
	</article>	
	<?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>
