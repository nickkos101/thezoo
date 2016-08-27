<?php

function related_posts() {

  $query = new WP_Query();

  $query->set('posts_per_page', 1);
  $query->set('post_type', array('post', 'animal'));
  $query->set('orderby', 'rand');

  $related_post = $query->get_posts();
  $related_post = $related_post[0];

  ?>

  <div class="row">
    <div class="col-sm-12">
      <div class="related-post">
        <h3>
          <a href="<?php echo get_the_permalink($related_post->ID); ?>">
            <?php echo get_the_title($related_post->ID); ?>
          </a>
        </h3>
        <?php

        if (has_post_thumbnail($related_post->ID)) {
          echo '<a href="'.get_the_permalink($related_post->ID).'">';
          echo '<div class="ft-img">';
          echo get_the_post_thumbnail($related_post->ID, 'large', array( 'width' => '100%', 'class' => 'img-responsive' ));
          echo '<img class="play-button" src="'.get_template_directory_uri().'/assets/images/playbutton.png">';
          echo '</div>';
          echo '</a>';
        }

        ?>
      </div>
    </div>
  </div>

  <?php

  wp_reset_query();

}
