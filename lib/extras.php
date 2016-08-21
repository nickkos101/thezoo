<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
* Add <body> classes
*/
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
* Clean up the_excerpt()
*/
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');



function header_favicon() {
  $dist_directory = get_template_directory_uri().'/dist/images/favicon';

  echo '
  <link rel="apple-touch-icon" sizes="57x57" href="'.$dist_directory.'/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="'.$dist_directory.'/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="'.$dist_directory.'/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="'.$dist_directory.'/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="'.$dist_directory.'/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="'.$dist_directory.'/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="'.$dist_directory.'/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="'.$dist_directory.'/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="'.$dist_directory.'/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="'.$dist_directory.'/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="'.$dist_directory.'/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="'.$dist_directory.'/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="'.$dist_directory.'/favicon-16x16.png">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="'.$dist_directory.'/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  ';
}

add_action('wp_head', __NAMESPACE__ . '\\header_favicon');


function video_wrapper_responsive($html, $url, $attr, $post_id) {
  return '<div class="video-container">' . $html . '</div>';
}
add_filter('embed_oembed_html', __NAMESPACE__ . '\\video_wrapper_responsive', 99, 4);



function open_graph_tags() {

  $title = get_the_title();
  $permalink = get_the_permalink();
  $image = get_the_post_thumbnail_url();

  if (empty($title)) {
    $title = get_bloginfo('name');
  }

  if (empty($permalink)) {
    $permalink = get_site_url();
  }

  if (empty($image)) {
    $image = get_template_directory_uri().'/screenshot.png';
  }

echo '
<meta property="og:title" content="'.$title.'" />
<meta property="og:type" content="article" />
<meta property="og:url" content="'.$permalink.'" />
<meta property="og:image" content="'.$image.'" />
';

}
add_action('wp_head', __NAMESPACE__ . '\\open_graph_tags');
