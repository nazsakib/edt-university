<?php

// custom post type
function edtUni_post_types()
{
    register_post_type(
        'event',
        array(
            'public' => true,
            'labels' => array(
                'name' => 'Events'
            ),
            'menu_icon' => 'dashicons-calendar'
        )
    );
}
add_action('init', 'edtUni_post_types');

?>