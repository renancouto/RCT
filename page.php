<?php remove_filter ('the_content', 'wpautop'); ?>
<?php get_header(); ?>

<header class="main-header">
	<?php include (TEMPLATEPATH . '/_/inc/header.php' ); ?>
</header>

<section class="main-content" id="main-content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="post" id="post-<?php the_ID(); ?>">

			<h1 class="heading"><?php the_title(); ?></h2>
			<?php /*include (TEMPLATEPATH . '/_/inc/meta.php' );*/ ?>

			<div class="entry">
				<?php
					the_content();
					wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number'));
				?>
			</div>

			<?php edit_post_link('Editar', '<p>', '</p>'); ?>

		</article>

		<?php comments_template(); ?>

		<?php endwhile; endif; ?>

<?php /*get_sidebar();*/ ?>
</section>

<?php get_footer(); ?>