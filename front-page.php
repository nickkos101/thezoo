<div class="container">

  <div class="row">
    <div class="col-md-12">
      <h2>Latest Posts</h2>
    </div>

    <?php

    $wp_query = new WP_Query(
    array(
      'post_type' => 'post',
      'posts_per_page' => 12,
      'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1,
      )
    );

    ?>

    <?php while ( $wp_query->have_posts()) :  $wp_query->the_post(); ?>
      <div class="col-md-4 col-sm-12">
        <?php get_template_part('templates/content-animals'); ?>
      </div>
    <?php endwhile; ?>
  </div>



  <div class="row">
    <div class="col-md-12">
      <h2>Animals</h2>
    </div>

    <?php

    $wp_query = new WP_Query(
    array(
      'post_type' => 'animals',
      'posts_per_page' => 12,
      'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1,
      )
    );

    ?>

    <?php while ( $wp_query->have_posts()) :  $wp_query->the_post(); ?>
      <div class="col-md-4 col-sm-12">
        <?php get_template_part('templates/content-animals'); ?>
      </div>
    <?php endwhile; ?>
  </div>
</div>
