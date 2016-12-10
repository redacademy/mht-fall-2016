<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
function register_recipe_tag_taxonomy() {//s

	$labels = array(
		'name'                       => 'Recipes Tag',
		'singular_name'              => 'Recipe Tag',
		'menu_name'                  => 'Recipe Tag',
		'all_items'                  => 'All Recipes Tags',
		'parent_item'                => 'Parent Recipe Tag',
		'parent_item_colon'          => 'Parent Recipe Tag:',
		'new_item_name'              => 'New Recipe Tag Name',
		'add_new_item'               => 'Add New Recipe Tag',
		'edit_item'                  => 'Edit Recipe Tag',
		'update_item'                => 'Update Recipe Tag',
		'view_item'                  => 'View Recipe Tag',
		'separate_items_with_commas' => 'Separate Recipe Tags with commas',
		'add_or_remove_items'        => 'Add or remove Recipe Tags',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Recipe Tags',
		'search_items'               => 'Search Recipe Tags',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Recipe Tags',
		'items_list'                 => 'Recipe Tags list',
		'items_list_navigation'      => 'Recipe Tags list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'recipe_tag', array( 'recipe' ), $args );//ss

}
add_action( 'init', 'register_recipe_tag_taxonomy', 0 );//s

<?php

function register_article_tag_taxonomy() {//s

	$labels = array(
		'name'                       => 'Articles Tag',
		'singular_name'              => 'Article Tag',
		'menu_name'                  => 'Article Tag',
		'all_items'                  => 'All Articles Tags',
		'parent_item'                => 'Parent Article Tag',
		'parent_item_colon'          => 'Parent Article Tag:',
		'new_item_name'              => 'New Article Tag Name',
		'add_new_item'               => 'Add New Article Tag',
		'edit_item'                  => 'Edit Article Tag',
		'update_item'                => 'Update Article Tag',
		'view_item'                  => 'View Article Tag',
		'separate_items_with_commas' => 'Separate Article Tags with commas',
		'add_or_remove_items'        => 'Add or remove Article Tags',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Article Tags',
		'search_items'               => 'Search Article Tags',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Article Tags',
		'items_list'                 => 'Article Tags list',
		'items_list_navigation'      => 'Article Tags list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'article_tag', array( 'article' ), $args );//ss

}
add_action( 'init', 'register_article_tag_taxonomy', 0 );//s