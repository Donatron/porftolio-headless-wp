<?php
  function portfolio_post_types() {
    register_post_type('experience', array(
      'supports' => array('title', 'editor', 'excerpt'),
      'rewrite' => array('slug' => 'experience'),
      'has_archive' => false,
      'public' => true,
      'show_in_rest' => true,
      'show_in_graphql' => true,
      'graphql_single_name' => 'Experience',
      'graphql_plural_name' => 'Experiences',
      'labels' => array(
        'name' => 'Experience',
        'add_new_item' => 'Add New Experience',
        'edit_item' => 'Edit Experience',
        'all_items' => 'All Experience',
        'singular_name' => 'Experience'
      ),
      'menu_icon' => 'dashicons-businessperson'
    ));

    register_post_type('portfolio', array(
      'supports' => array('title', 'editor', 'excerpt'),
      'rewrite' => array('slug' => 'portfolio'),
      'has_archive' => true,
      'public' => true,
      'show_in_rest' => true,
      'show_in_graphql' => true,
      'graphql_single_name' => 'Portfolio',
      'graphql_plural_name' => 'Portfolio Items',
      'labels' => array(
        'name' => 'Portfolio',
        'add_new_item' => 'Add New Portfolio Item',
        'edit_item' => 'Edit Portfolio Item',
        'all_items' => 'All Portfolio Item',
        'singular_name' => 'Portfolio Item'
      ),
      'menu_icon' => 'dashicons-portfolio'
    ));

    register_post_type('skill', array(
      'supports' => array('title', 'editor', 'excerpt'),
      'rewrite' => array('slug' => 'skills'),
      'has_archive' => false,
      'public' => true,
      'show_in_rest' => true,
      'show_in_graphql' => true,
      'graphql_single_name' => 'Skill',
      'graphql_plural_name' => 'Skills',
      'labels' => array(
        'name' => 'Skills',
        'add_new_item' => 'Add New Skill',
        'edit_item' => 'Edit Skill',
        'all_items' => 'All Skill',
        'singular_name' => 'Skill'
      ),
      'menu_icon' => 'dashicons-awards'
    ));
  }
  add_action('init', 'portfolio_post_types');
  
  function ww_load_dashicons(){
    wp_enqueue_style('dashicons');
  }
  add_action('wp_enqueue_scripts', 'ww_load_dashicons', 999);
  