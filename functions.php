<?php

//  styles and scripts
function edtUni_files()
{
    // JavaScript files
    wp_enqueue_script('edtUni_javascript_files', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0.0', true);

    // style files
    wp_enqueue_style('edtUni_fonts', '//fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    wp_enqueue_style('edtUni_fontAwesome_styles', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('edtUni_primary_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('edtUni_secondory_styles', get_theme_file_uri('/build/index.css'));
}
add_action('wp_enqueue_scripts', 'edtUni_files');


// title
function edtUni_features()
{
    register_nav_menu('headerMenu', 'Header Menu');
    register_nav_menu('footerMenuOne', 'Footer Menu 1');
    register_nav_menu('footerMenuTwo', 'Footer Menu 2');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'edtUni_features');

?>