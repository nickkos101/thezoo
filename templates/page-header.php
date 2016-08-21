<?php use Roots\Sage\Titles; ?>

<?php

  $background_image = get_field('background-image');
  if (isset($background_image['url'])) {
      $background_image = $background_image['url'];
  }

?>


<div class="page-header">
  <div class="jumbotron" style="background-image:url('<?php echo $background_image; ?>');">
    <div class="container">
      <?php
      if ( has_post_thumbnail() ) {
        the_post_thumbnail('thumbnail', array('class' => 'alignleft img-circle'));
      }
      ?>

      <h1><?= Titles\title(); ?></h1>
      <div class="tags">
        <?php the_tags( 'Tags: ', ', ', '<br />' ); ?>
      </div>
    </div>
  </div>
</div>
