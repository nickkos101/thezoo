<article <?php post_class(); ?> style="background-image:url('<?php the_post_thumbnail_url(); ?>');">

    <header>
      <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    </header>

    <footer>
    </footer>

  <?php comments_template('/templates/comments.php'); ?>
</article>
