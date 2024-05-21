<?php

// custom post type
function edtUni_post_types()
{
    // event post type
    $labels = array(
        'name' => 'Events',
        'add_new_item' => 'Add New Event',
        'edit_item' => 'Edit Event',
        'all_items' => 'All Events',
        'singular_name' => 'Event'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-calendar',
        'show_in_rest' => true,
        'rewrite' => array(
            'slug' => 'events'
        ),
        'taxonomies' => array(
            'category',
            'post_tag'
        ),
        'supports' => array(
            'title',
            'editor',
            'author',
            'thumbnail',
            'excerpt'
        )
    );
    register_post_type('event', $args);


    //program post type
    $labels = array(
        'name' => 'Programs',
        'add_new_item' => 'Add New Program',
        'edit_item' => 'Edit Program',
        'all_items' => 'All Programs',
        'singular_name' => 'Program'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-awards',
        'show_in_rest' => true,
        'rewrite' => array(
            'slug' => 'programs'
        ),
        'taxonomies' => array(
            'category',
            'post_tag'
        ),
        'supports' => array(
            'title',
            'editor',
            'author',
            'thumbnail'
        )
    );
    register_post_type('program', $args);


    //professor post type
    $labels = array(
        'name' => 'Professors',
        'add_new_item' => 'Add New Professor',
        'edit_item' => 'Edit Professor',
        'all_items' => 'All Professors',
        'singular_name' => 'Professor'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_icon' => 'dashicons-businessman',
        'show_in_rest' => true,
        'taxonomies' => array(
            'category',
            'post_tag'
        ),
        'supports' => array(
            'title',
            'editor',
            'author',
            'thumbnail'
        )
    );
    register_post_type('professor', $args);
}
add_action('init', 'edtUni_post_types');

?>