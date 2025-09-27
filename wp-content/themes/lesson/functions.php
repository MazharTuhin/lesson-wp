<?php

// Enqueue scripts and styles
function lessonlms_theme_scripts() {
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,400&family=Sen:wght@700&display=swap');

    // Site Styles CSS
    wp_enqueue_style('site-styles', get_template_directory_uri() . "/assets/css/style.css");
    
    // Responsive CSS
    wp_enqueue_style('responsive-styles', get_template_directory_uri() . "/assets/css/responsive.css");
    
    // Slick Slider
    wp_enqueue_style('slick-css', "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css", array(), '1.9.0');
    
    // Theme CSS
    wp_enqueue_style('lesson-theme-style', get_stylesheet_uri());
    
    // Boxicons CSS
    wp_enqueue_style('boxicons', 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css', array(), '2.1.4');

    // jQuery 
    wp_enqueue_script('jquery');

    // Slick JS
    wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), '1.9.0', true);
    
    // Main JS
    wp_enqueue_script('main-scripts', get_template_directory_uri() . '/assets/js/script.js', array(), true);

    
}
add_action("wp_enqueue_scripts","lessonlms_theme_scripts");

function lessonlms_theme_registration() {
    add_theme_support('custom-logo', array(
        'height' => 17,
        'width' => 82
    ));

    register_nav_menus(array(
        'primary_menu' => __('Primary Menu', 'lessonlms'),
        'footer_menu_1' => __('Footer Menu 1', 'lessonlms'),
        'footer_menu_2' => __('Footer Menu 2', 'lessonlms')
    ));


}
add_action('after_setup_theme', 'lessonlms_theme_registration');