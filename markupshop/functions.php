<?php

//add custom post types
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'case-studies',
    array(
      'labels' => array(
        'name' => __( 'Case Studies' ),
        'singular_name' => __( 'Case Study' )
      ),
      'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'page-attributes', 'post-formats' ),
      'public' => true,
      'has_archive' => true,
      //'supports' => array( 'thumbnail' ),
    )
  );
} 

add_theme_support( 'post-thumbnails' );

?>