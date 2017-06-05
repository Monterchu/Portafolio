<?php
add_theme_support( 'post-thumbnails' );

function register_my_menu(){
  register_nav_menu(
    array(
      'top-menu' => __('Menu Superior'),
      'bottom-menu' => __('Menu Footer')
    )
  );
}
add_action('init','register_my_menu');
