<header class="banner">
  <div class="container">
    <div class="row">
      <div class="col-xs-4">
        <h1><a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
      </div>
      <div class="col-xs-8">
        <nav class="nav-primary">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
          endif;
          ?>
        </nav>
      </div>
    </div>
  </div>
</header>
