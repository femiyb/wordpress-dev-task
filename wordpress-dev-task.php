<?php
/*
Plugin Name: People Manager Plugin
Description: A WordPress plugin for managing persons in your company.
Version: 1.0.0
Author: Femi
License: GPL v2 or later
Text Domain: wordpress-dev-task
*/


// Load Composer autoloader
if (file_exists(plugin_dir_path(__FILE__) . 'vendor/autoload.php')) {
    require_once(plugin_dir_path(__FILE__) . 'vendor/autoload.php');
}


// Define custom post type 'Persons'
function register_persons_post_type() {
    $labels = array(
        'name'               => _x('Persons', 'post type general name', 'wordpress-dev-task'),
        'singular_name'      => _x('Person', 'post type singular name', 'wordpress-dev-task'),
        'menu_name'          => _x('Persons', 'admin menu', 'wordpress-dev-task'),
        'name_admin_bar'     => _x('Person', 'add new on admin bar', 'wordpress-dev-task'),
        'add_new'            => _x('Add New', 'person', 'wordpress-dev-task'),
        'add_new_item'       => __('Add New Person', 'wordpress-dev-task'),
        'new_item'           => __('New Person', 'wordpress-dev-task'),
        'edit_item'          => __('Edit Person', 'wordpress-dev-task'),
        'view_item'          => __('View Person', 'wordpress-dev-task'),
        'all_items'          => __('All Persons', 'wordpress-dev-task'),
        'search_items'       => __('Search Persons', 'wordpress-dev-task'),
        'parent_item_colon'  => __('Parent Persons:', 'wordpress-dev-task'),
        'not_found'          => __('No persons found.', 'wordpress-dev-task'),
        'not_found_in_trash' => __('No persons found in Trash.', 'wordpress-dev-task')
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __('Description.', 'wordpress-dev-task'),
        'public'             => false,  // Set to true if you want to make this post type publicly accessible.
        'publicly_queryable' => false,  // Set to true if you want to enable frontend queries.
        'show_ui'            => true,   // Show in admin UI.
        'show_in_menu'       => true,   // Show in the WordPress admin menu.
        'query_var'          => true,
        'rewrite'            => array('slug' => 'persons'),
        'capability_type'    => 'post',
        'has_archive'        => false,  // Set to true if you want an archive page.
        'menu_position'      => 5,      // Position in the admin menu.
        'supports'           => array('title', 'editor', 'thumbnail'), // Define supported features.
        'show_in_rest'       => true,   // Enable REST API support.
        'rest_base'          => 'persons',
    );

    register_post_type('person', $args);
}
add_action('init', 'register_persons_post_type');



function enqueue_block_assets() {
    wp_enqueue_script(
        'people-manager-block',
        plugins_url('/blocks/index.js', __FILE__),
        array('wp-blocks', 'wp-components', 'wp-editor'),
        filemtime(plugin_dir_path(__FILE__) . 'blocks/index.js')
    );

    wp_enqueue_style(
        'people-manager-block-editor-style',
        plugins_url('/blocks/editor.css', __FILE__),
        array('wp-edit-blocks'),
        filemtime(plugin_dir_path(__FILE__) . 'blocks/editor.css')
    );

    wp_enqueue_style(
        'people-manager-block-style',
        plugins_url('/blocks/style.css', __FILE__),
        array(),
        filemtime(plugin_dir_path(__FILE__) . 'blocks/style.css')
    );

    wp_enqueue_script(
        'people-manager-person-block',
        plugins_url('dist/blocks/person-block.js', __FILE__),
        array('wp-blocks', 'wp-components', 'wp-element'),
        filemtime(plugin_dir_path(__FILE__) . 'dist/blocks/person-block.js')
    );
}

add_action('enqueue_block_editor_assets', 'enqueue_block_assets');


