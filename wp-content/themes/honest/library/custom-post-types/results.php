<?php

  function results() {
    register_post_type( 'results',
      array(
        'labels' => array(
          'name' => __( 'Results', 'bonestheme' ),
          'singular_name' => __( 'Result', 'bonestheme' ),
          'all_items' => __( 'All Results', 'bonestheme' ),
          'add_new' => __( 'Add New', 'bonestheme' ),
          'add_new_item' => __( 'Add New Result', 'bonestheme' ),
          'edit' => __( 'Edit', 'bonestheme' ),
          'edit_item' => __( 'Edit Results', 'bonestheme' ),
          'new_item' => __( 'New Result', 'bonestheme' ),
          'view_item' => __( 'View Result', 'bonestheme' ),
          'search_items' => __( 'Search Results', 'bonestheme' ),
          'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ),
          'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ),
          'parent_item_colon' => ''
        ),
        'description' => __( 'This is the Results post type', 'bonestheme' ),
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'query_var' => true,
        'menu_position' => 8,
        'rewrite' => array(
          'slug' => 'results', 'with_front' => false
        ),
        'has_archive' => 'results',
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
          'title', 'editor', 'author', 'thumbnail', 'revisions'
        )
      )
    );
  }

  add_action( 'init', 'results');

?>
