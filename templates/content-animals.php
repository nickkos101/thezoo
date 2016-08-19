<article <?php post_class(); ?>>
  <div class="gray-wrap">
    <header>
      <div class="text-center">
        <?php
        if ( has_post_thumbnail() ) {
          the_post_thumbnail('medium');
        }
        ?>
      </div>
      <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    </header>

    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>

  </div>

  <?php comments_template('/templates/comments.php'); ?>
</article>
