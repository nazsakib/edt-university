<?php

// custom post type
function edtUni_post_types()
{
    $labels = array(
        'name' => 'Events',
        'add_new_item' => 'Add New Event',
        'edit_item' => 'Edit Event',
        'all_items' => 'All Events',
        'singular_name' => 'Event' 
    );
    $args = array (
    	'labels' => $labels,
     	'public' => true,
    	'has_archive' => true,
     	'menu_icon' => 'dashicons-calendar',
    	'rewrite' => array(
    		'slug' => 'events'
    	),
    	'taxonomies' => array(
    		'category', 'post_tag'
    	),
    	'show_in_rest' => true,
        'supports' => array(
            'title',
            'editor',
            'author',
            'thumbnail'
        )
    );
    register_post_type('event', $args);
}
add_action('init', 'edtUni_post_types');

?>
         	
