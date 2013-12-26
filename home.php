<?php get_template_part('templates/content', 'frontpage'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning clear">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<h1>Dernières actualités</h1>

<div class="row-fluid">
<?php $i = 0;
while (have_posts()) : the_post(); ?>
      <div class="post-frontpage col-md-3">
        <?php get_template_part('templates/content', get_post_format()); ?>
      </div>

<?php $i++; endwhile; ?>

  </div>


<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>
