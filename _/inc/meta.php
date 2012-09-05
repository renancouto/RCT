<section class="meta">
	<time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="date updated"><?php the_time('d, F') ?> de <?php the_time('Y') ?></time>

	<!-- <span class="byline author vcard">
		<i>by</i> <span class="fn"><?php the_author() ?></span>
	</span> -->

	<?php comments_popup_link('0', '1', '%', 'comments-link', ''); ?>
</section>