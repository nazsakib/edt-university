<?php

// custom post type
function edtUni_post_types()
{
    register_post_type(
        'event',
        array(
            'show_in_rest' => true,
            'labels' => array(
                'name' => 'Events',
                'add_new_item' => 'Add New Event',
                'edit_item' => 'Edit Event',
                'all_items' => 'All Events',
                'singular_name' => 'Event'
            ),
            'public' => true,
            'menu_icon' => 'dashicons-calendar',
            'supports' => array(
                'title',
                'author',
                'editor',
                'thumbnail'
            ),
            'taxonomies' => array(
                'category',
                'post_tag'
            )
        )
    );
}
add_action('init', 'edtUni_post_types');

?>