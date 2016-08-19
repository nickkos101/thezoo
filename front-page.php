<div class="container">
  <div class="row">

<?php

  $wp_query = new WP_Query(
    array(
      'post_type' => 'animals',
      'posts_per_page' => 12,
      'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1,
    )
  );

?>


    <?php if (! $wp_query->have_posts()) : ?>
      <div class="alert alert-warning">
        <?php _e('Sorry, no results were found.', 'sage'); ?>
      </div>
      <?php get_search_form(); ?>
    <?php endif; ?>
    <?php while ( $wp_query->have_posts()) :  $wp_query->the_post(); ?>
      <div class="col-md-4 col-sm-12 text-center">
        <?php get_template_part('templates/content-animals'); ?>
      </div>
    <?php endwhile; ?>
  </div>
</div>
