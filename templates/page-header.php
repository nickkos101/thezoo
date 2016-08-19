<?php use Roots\Sage\Titles; ?>

<?php

if (has_post_thumbnail()) {
  $featured_img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
}

?>


<div class="page-header">
  <div class="jumbotron" style="background-image:url('<?php echo $featured_img; ?>');">
    <div class="container">
      <?php
      if ( has_post_thumbnail() ) {
        the_post_thumbnail('thumbnail', array('class' => 'alignleft img-circle'));
      }
      ?>

      <h1><?= Titles\title(); ?></h1>
      <?php the_tags( 'Tags: ', ', ', '<br />' ); ?>
    </div>
  </div>
</div>
