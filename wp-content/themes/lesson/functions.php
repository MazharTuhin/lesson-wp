<?php

// Enqueue scripts and styles

use Soap\Url;

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
    // For Enable Post Featured Image
    add_theme_support('post-thumbnails');
    
    // Theme LOGO
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

function lessonlsm_customize_register($wp_customize) {
    //-------------------- BLOG SECTION -----------------------//
    $wp_customize->add_section('blog_section', [
        'title' => __('Blog Section', 'lessonlms'),
        'priority' => 120,
    ]);

    // Blog Section Title
    $wp_customize->add_setting('blog_section_title', [
        'default' => 'Our Blog',
    ]);

    $wp_customize->add_control('blog_section_title', [
        'label' => __('Blog Section Title', 'lessonlms'),
        'section' => 'blog_section',
        'type' => 'text'
    ]);

    // Blog Section Description
    $wp_customize->add_setting('blog_section_description', [
        'default' => 'Read our regular travel blog and know the latest update of tour and travel',
    ]);

    $wp_customize->add_control('blog_section_description', [
        'label' => __('Blog Section Description', 'lessonlms'),
        'section' => 'blog_section',
        'type' => 'textarea'
    ]);

    //-------------------- FOOTER SECTION ---------------------//
    $wp_customize->add_section('footer_section', [
        'title' => __('Footer Section', 'lessonlms'),
        'priority' => 120,
    ]);

    // Footer Logo
    $wp_customize->add_setting('footer_logo', [
        'default' => get_template_directory_uri() . "/assets/images/logo-footer.png",
        'tranport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ]);

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', [
        'label' => __('Footer Logo', 'lessonlms'),
        'settings' => 'footer_logo',
        'section' => 'footer_section',
    ]));

    // About Text Field
    $wp_customize->add_setting('footer_about_text_setting', [
        'default' => 'Need to help for your dream Career? trust us. With Lesson, study becomes a lot easier with us.',
    ]);

    $wp_customize->add_control('footer_about_text_setting', [
        'label' => __('About Text', 'lessonlms'),
        'section' => 'footer_section',
        'type' => 'textarea'
    ]);

    // Footer Social Links
    $socials = ['twitter', 'facebook', 'linkedin', 'instagram'];
    foreach ($socials as $social) {
        $wp_customize->add_setting("footer_{$social}_link", [
            'default' => '#'
        ]);

        $wp_customize->add_control("footer_{$social}_link", [
            'label' => sprintf(__('%s URL', 'lessonlms'), ucfirst($social)),
            'section' => 'footer_section',
            'type' => 'url'
        ]);
    }

    // Footer Menu 1 Title
    $wp_customize->add_setting('footer_menu_1_title', [
        'default' => 'Company',
    ]);

    $wp_customize->add_control('footer_menu_1_title', [
        'label' => __('Footer Menu 1 Title', 'lessonlms'),
        'section' => 'footer_section',
        'settins' => 'footer_menu_1_title',
        'type' => 'text'
    ]);

    // Footer Menu 2 Title
    $wp_customize->add_setting('footer_menu_2_title', [
        'default' => 'Support',
    ]);

    $wp_customize->add_control('footer_menu_2_title', [
        'label' => __('Footer Menu 2 Title', 'lessonlms'),
        'section' => 'footer_section',
        'settins' => 'footer_menu_2_title',
        'type' => 'text'
    ]);

    // Footer Address Title
    $wp_customize->add_setting('footer_address_title', [
        'default' => 'Address',
    ]);

    $wp_customize->add_control('footer_address_title', [
        'label' => __('Footer Address Title', 'lessonlms'),
        'section' => 'footer_section',
        'settins' => 'footer_address_title',
        'type' => 'text'
    ]);

    // Footer Location Title
    $wp_customize->add_setting('footer_location_title', [
        'default' => 'Location:',
    ]);

    $wp_customize->add_control('footer_location_title', [
        'label' => __('Footer Location Title', 'lessonlms'),
        'section' => 'footer_section',
        'type' => 'text'
    ]);

    // Footer Location Text
    $wp_customize->add_setting('footer_location_text', [
        'default' => '27 Division St, New York, NY 10002, USA',
    ]);

    $wp_customize->add_control('footer_location_text', [
        'label' => __('Footer Location Text', 'lessonlms'),
        'section' => 'footer_section',
        'type' => 'text'
    ]);

    // Footer Email Title
    $wp_customize->add_setting('footer_email_title', [
        'default' => 'Email:',
    ]);

    $wp_customize->add_control('footer_email_title', [
        'label' => __('Footer Location Title', 'lessonlms'),
        'section' => 'footer_section',
        'type' => 'text'
    ]);

    // Footer Email
    $wp_customize->add_setting('footer_email', [
        'default' => 'email@gmail.com',
    ]);

    $wp_customize->add_control('footer_email', [
        'label' => __('Footer Email', 'lessonlms'),
        'section' => 'footer_section',
        'type' => 'text'
    ]);

    // Footer Phone Title
    $wp_customize->add_setting('footer_phone_title', [
        'default' => 'Phone:',
    ]);

    $wp_customize->add_control('footer_phone_title', [
        'label' => __('Footer Phone Title', 'lessonlms'),
        'section' => 'footer_section',
        'type' => 'text'
    ]);

    // Footer Phone
    $wp_customize->add_setting('footer_phone', [
        'default' => '+ 000 1234 567 890',
    ]);

    $wp_customize->add_control('footer_phone', [
        'label' => __('Footer Phone', 'lessonlms'),
        'section' => 'footer_section',
        'type' => 'text'
    ]);
}
add_action('customize_register', 'lessonlsm_customize_register');