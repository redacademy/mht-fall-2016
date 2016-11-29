<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type
function register_event_type() {//small

    $labels = array(
        'name'                  => 'Events',
        'singular_name'         => 'Event',
        'menu_name'             => 'Events',
        'name_admin_bar'        => 'Event',
        'archives'              => 'Events',
        'parent_item_colon'     => 'Parent Event:',
        'all_items'             => 'All Events',
        'add_new_item'          => 'Add New Events',
        'add_new'               => 'Add New',
        'new_item'              => 'New Event',
        'edit_item'             => 'Edit Event',
        'update_item'           => 'Update Event',
        'view_item'             => 'View Event',
        'search_items'          => 'Search Event',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into event',//small
        'uploaded_to_this_item' => 'Uploaded to this event',//small
        'items_list'            => 'Events list',
        'items_list_navigation' => 'Events list navigation',
        'filter_items_list'     => 'Filter events list',//small
    );
    $args = array(
        'label'                 => 'Event',
        'description'           => 'event for inhabitent',//small
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 10,
        'menu_icon'             => 'dashicons-businessman',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => false,
        'has_archive'           => 'event',//small
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'event', $args );//small

}
add_action( 'init', 'register_event_type', 0 );//small

function register_recipe_type() {//small

    $labels = array(
        'name'                  => 'Recipes',
        'singular_name'         => 'Recipe',
        'menu_name'             => 'Recipes',
        'name_admin_bar'        => 'Recipe',
        'archives'              => 'Recipes',
        'parent_item_colon'     => 'Parent Recipe:',
        'all_items'             => 'All Recipes',
        'add_new_item'          => 'Add New Recipes',
        'add_new'               => 'Add New',
        'new_item'              => 'New Recipe',
        'edit_item'             => 'Edit Recipe',
        'update_item'           => 'Update Recipe',
        'view_item'             => 'View Recipe',
        'search_items'          => 'Search Recipe',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into recipe',//small
        'uploaded_to_this_item' => 'Uploaded to this recipe',//small
        'items_list'            => 'Recipes list',
        'items_list_navigation' => 'Recipes list navigation',
        'filter_items_list'     => 'Filter recipes list',//small
    );
    $args = array(
        'label'                 => 'Recipe',
        'description'           => 'recipe for inhabitent',//small
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 10,
        'menu_icon'             => 'dashicons-list-view',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => false,
        'has_archive'           => 'recipe',//small
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'recipe', $args );//small

}
add_action( 'init', 'register_recipe_type', 0 );//small

function register_article_type() {//small

    $labels = array(
        'name'                  => 'Articles',
        'singular_name'         => 'Article',
        'menu_name'             => 'Articles',
        'name_admin_bar'        => 'Article',
        'archives'              => 'Articles',
        'parent_item_colon'     => 'Parent Article:',
        'all_items'             => 'All Articles',
        'add_new_item'          => 'Add New Articles',
        'add_new'               => 'Add New',
        'new_item'              => 'New Article',
        'edit_item'             => 'Edit Article',
        'update_item'           => 'Update Article',
        'view_item'             => 'View Article',
        'search_items'          => 'Search Article',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into article',//small
        'uploaded_to_this_item' => 'Uploaded to this article',//small
        'items_list'            => 'Articles list',
        'items_list_navigation' => 'Articles list navigation',
        'filter_items_list'     => 'Filter articles list',//small
    );
    $args = array(
        'label'                 => 'Article',
        'description'           => 'article for inhabitent',//small
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 10,
        'menu_icon'             => 'dashicons-welcome-write-blog',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => false,
        'has_archive'           => 'article',//small
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'article', $args );//small

}
add_action( 'init', 'register_article_type', 0 );//small


function register_news_type() {//small

    $labels = array(
        'name'                  => 'News',
        'singular_name'         => 'News',
        'menu_name'             => 'News',
        'name_admin_bar'        => 'News',
        'archives'              => 'News',
        'parent_item_colon'     => 'Parent News:',
        'all_items'             => 'All News',
        'add_new_item'          => 'Add New News',
        'add_new'               => 'Add New',
        'new_item'              => 'New News',
        'edit_item'             => 'Edit News',
        'update_item'           => 'Update News',
        'view_item'             => 'View News',
        'search_items'          => 'Search News',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into news',//small
        'uploaded_to_this_item' => 'Uploaded to this news',//small
        'items_list'            => 'News list',
        'items_list_navigation' => 'News list navigation',
        'filter_items_list'     => 'Filter news list',//small
    );
    $args = array(
        'label'                 => 'News',
        'description'           => 'news for inhabitent',//small
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 10,
        'menu_icon'             => 'dashicons-microphone',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => false,
        'has_archive'           => 'news',//small
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'news', $args );//small

}
add_action( 'init', 'register_news_type', 0 );//small


