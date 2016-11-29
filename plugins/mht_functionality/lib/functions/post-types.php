<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type
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
