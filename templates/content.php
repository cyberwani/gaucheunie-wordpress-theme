<article <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>">
	<header>
		<?php if ( has_post_thumbnail() ) {
	 		the_post_thumbnail();
		} ?>
		<h4 class="entry-title"><?php the_title(); ?></h4>
		<?php get_template_part('templates/entry-meta'); ?>
	</header>
	<!--<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>-->
	</a>
</article>
