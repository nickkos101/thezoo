<header>
  <?php get_template_part('/templates/page', 'header'); ?>
</header>

<div class="container">

  <!-- Post Leaderboard Responsive -->
  <ins class="adsbygoogle"
  style="display:block"
  data-ad-client="ca-pub-9390819141393668"
  data-ad-slot="4737757303"
  data-ad-format="auto"></ins>
  <script>
  (adsbygoogle = window.adsbygoogle || []).push({});
  </script>

  <div class="row">
    <?php while ( have_posts()) :  the_post(); ?>
      <div class="col-md-4 col-sm-12">
        <?php get_template_part('templates/content-animals'); ?>
      </div>
    <?php endwhile; ?>
  </div>

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
