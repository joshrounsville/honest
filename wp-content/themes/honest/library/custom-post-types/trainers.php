<?php

  add_action( 'after_switch_theme', 'bones_flush_rewrite_rules' );

  function bones_flush_rewrite_rules() {
    flush_rewrite_rules();
  }

  function trainers() {
    register_post_type( 'trainers',
      array(
        'labels' => array(
          'name' => __( 'Our Trainers', 'bonestheme' ),
          'singular_name' => __( 'Trainer', 'bonestheme' ),
          'all_items' => __( 'All Trainers', 'bonestheme' ),
          'add_new' => __( 'Add New', 'bonestheme' ),
          'add_new_item' => __( 'Add New Trainer', 'bonestheme' ),
          'edit' => __( 'Edit', 'bonestheme' ),
          'edit_item' => __( 'Edit Trainers', 'bonestheme' ),
          'new_item' => __( 'New Trainer', 'bonestheme' ),
          'view_item' => __( 'View Trainer', 'bonestheme' ),
          'search_items' => __( 'Search Trainers', 'bonestheme' ),
          'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ),
          'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ),
          'parent_item_colon' => ''
        ),
        'description' => __( 'This is the Trainer post type', 'bonestheme' ),
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'query_var' => true,
        'menu_position' => 8,
        'rewrite' => array(
          'slug' => 'our-trainers', 'with_front' => false
        ),
        'has_archive' => 'our-trainers',
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
          'title', 'editor', 'author', 'thumbnail', 'revisions'
        )
      )
    );

    register_taxonomy_for_object_type( 'post_tag', 'trainers' );
  }

  add_action( 'init', 'trainers');


  register_taxonomy( 'trainers_tag',
    array('trainers'),
    array('hierarchical' => false,
      'labels' => array(
        'name' => __( 'Trainer Tags', 'bonestheme' ),
        'singular_name' => __( 'Trainer Tag', 'bonestheme' ),
        'search_items' =>  __( 'Search Trainer Tags', 'bonestheme' ),
        'all_items' => __( 'All Trainer Tags', 'bonestheme' ),
        'parent_item' => __( 'Parent Trainer Tag', 'bonestheme' ),
        'parent_item_colon' => __( 'Parent Trainer Tag:', 'bonestheme' ),
        'edit_item' => __( 'Edit Trainer Tag', 'bonestheme' ),
        'update_item' => __( 'Update Trainer Tag', 'bonestheme' ),
        'add_new_item' => __( 'Add New Trainer Tag', 'bonestheme' ),
        'new_item_name' => __( 'New Trainer Tag Name', 'bonestheme' )
      ),
      'show_admin_column' => true,
      'show_ui' => true,
      'query_var' => true,
    )
  );

?>
