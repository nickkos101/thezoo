<article <?php post_class(); ?>>

  <header>
    <?php get_template_part('/templates/page', 'header'); ?>
  </header>

  <div class="container">
    <div class="row">

      <?php while (have_posts()) : the_post(); ?>

        <div class="col-md-8">

          <!-- <div class="gray-wrap"> -->

          <div class="entry-content">

            <!-- Post Leaderboard Responsive -->
            <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-9390819141393668"
            data-ad-slot="4737757303"
            data-ad-format="auto"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>

            <?php the_content(); ?>


            <footer>
              <?php wp_link_pages(['before' => '<nav class="gallery-nav"><p>' . __('Gallery:', 'sage'), 'after' => '</p></nav>']); ?>
            </footer>

            <!-- Post Footer Responsive -->
            <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-9390819141393668"
            data-ad-slot="3380605302"
            data-ad-format="auto"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
          </div>

          <div class="share-bar">
            <a href="#" onclick="share_fb('<?php the_permalink(); ?>');return false;">
              <div class="fb-share-button btn btn-block"><span class="glyphicon glyphicon-share" aria-hidden="true"></span> Share on Facebook</div>
            </a>
          </div>

          <?php related_posts(); ?>

          <?php comments_template('/templates/comments.php'); ?>
        </div>

        <div class="col-md-4">
          <?php get_template_part('/templates/sidebar'); ?>
        </div>

      <?php endwhile; ?>

    </div>
  </div>


</article>
