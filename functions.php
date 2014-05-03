<?php

register_sidebar(
  array(
    'before_widget' => '<div class="widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  )
);

function shortcode_tw() {
  return 'Please follow <a href="http://twitter.com/wkmkymt">@wkmkymt</a>';
}

add_shortcode("tw", "shortcode_tw");

add_theme_support("menus");
add_theme_support("post-thumbnails");

?>