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
    
    // Font Awesome CSS
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css', array(), '7.0.1');

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
    // ------------------- HERO SECTION ----------------------- //
    $wp_customize->add_section('hero_section', [
        'title' => __('Hero Section', 'lessonlms'),
        'priority' => 120,
    ]);

    // Hero Image
    $wp_customize->add_setting('hero_image', [
        'default' => get_template_directory_uri() . '/assets/images/hero-img.png',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', [
        'label' => __('Hero Image', 'lessonlam'),
        'settings' => 'hero_image',
        'section' => 'hero_section',
    ]));

    // Hero Section Title
    $wp_customize->add_setting('hero_section_title', [
        'default' => 'Learn without limits and spread knowledge.',
    ]);

    $wp_customize->add_control('hero_section_title', [
        'label' => __('Section Title', 'lessonlms'),
        'settings' => 'hero_section_title',
        'section' => 'hero_section',
        'type' => 'text',
    ]);

    // Hero Section Description
    $wp_customize->add_setting('hero_section_description', [
        'default' => 'Build new skills for that “this is my year” feeling with courses, certificates, and degrees from world-class universities and companies.',
    ]);

    $wp_customize->add_control('hero_section_description', [
        'label' => __('Section Description', 'lessonlms'),
        'section' => 'hero_section',
        'type' => 'textarea'
    ]);

    // Hero Button Text
    $wp_customize->add_setting('hero_button_text', [
        'default' => 'See Courses',
    ]);

    $wp_customize->add_control('hero_button_text', [
        'label' => __('Button Text', 'lessonlms'),
        'section' => 'hero_section',
        'type' => 'text'
    ]);

    // Hero Button Link
    $wp_customize->add_setting('hero_button_link', [
        'default' => home_url('/courses'),
    ]);

    $wp_customize->add_control('hero_button_link', [
        'label' => __('Button Link', 'lessonlms'),
        'section' => 'hero_section',
        'type' => 'url'
    ]);

    // Hero Video Text
    $wp_customize->add_setting('hero_video_text', [
        'default' => 'Watch Video',
    ]);

    $wp_customize->add_control('hero_video_text', [
        'label' => __('Video Text', 'lessonlms'),
        'section' => 'hero_section',
        'type' => 'text'
    ]);

    // Hero Video Link
    $wp_customize->add_setting('hero_video_link', [
        'default' => '#',
    ]);

    $wp_customize->add_control('hero_video_link', [
        'label' => __('Video Link', 'lessonlms'),
        'section' => 'hero_section',
        'type' => 'url'
    ]);

    // Engagement Title
    $wp_customize->add_setting('engagement_title', [
        'default' => 'Recent engagement',
    ]);

    $wp_customize->add_control('engagement_title', [
        'label' => __('Engagement Title', 'lessonlms'),
        'section' => 'hero_section',
        'type' => 'text'
    ]);

    // Engagement Student Count
    $wp_customize->add_setting('engagement_student_count', [
        'default' => '50K',
    ]);

    $wp_customize->add_control('engagement_student_count', [
        'label' => __('Engagement Student Count', 'lessonlms'),
        'section' => 'hero_section',
        'type' => 'text'
    ]);

    // Engagement Course Count
    $wp_customize->add_setting('engagement_course_count', [
        'default' => '70+',
    ]);

    $wp_customize->add_control('engagement_course_count', [
        'label' => __('Engagement Course Count', 'lessonlms'),
        'section' => 'hero_section',
        'type' => 'text'
    ]);

    // Hero Course 1 title
    $wp_customize->add_setting('hero_course_1_title', [
        'default' => 'UI/UX Design',
    ]);

    $wp_customize->add_control('hero_course_1_title', [
        'label' => __('Course 1 Title', 'lessonlms'),
        'section' => 'hero_section',
        'type' => 'text'
    ]);

    // Hero Course 1 count
    $wp_customize->add_setting('hero_course_1_count', [
        'default' => '20',
    ]);

    $wp_customize->add_control('hero_course_1_count', [
        'label' => __('Course 1 Count', 'lessonlms'),
        'section' => 'hero_section',
        'type' => 'text'
    ]);

    // Hero Course 2 title
    $wp_customize->add_setting('hero_course_2_title', [
        'default' => 'Development',
    ]);

    $wp_customize->add_control('hero_course_2_title', [
        'label' => __('Course 2 Title', 'lessonlms'),
        'section' => 'hero_section',
        'type' => 'text'
    ]);

    // Hero Course 2 count
    $wp_customize->add_setting('hero_course_2_count', [
        'default' => '20',
    ]);

    $wp_customize->add_control('hero_course_2_count', [
        'label' => __('Course 2 Count', 'lessonlms'),
        'section' => 'hero_section',
        'type' => 'text'
    ]);

    // Hero Course 3 title
    $wp_customize->add_setting('hero_course_3_title', [
        'default' => 'Marketing',
    ]);

    $wp_customize->add_control('hero_course_3_title', [
        'label' => __('Course 3 Title', 'lessonlms'),
        'section' => 'hero_section',
        'type' => 'text'
    ]);

    // Hero Course 3 count
    $wp_customize->add_setting('hero_course_3_count', [
        'default' => '30',
    ]);

    $wp_customize->add_control('hero_course_3_count', [
        'label' => __('Course 3 Count', 'lessonlms'),
        'section' => 'hero_section',
        'type' => 'text'
    ]);

    // ------------------- CTA SECTION ----------------------- //
    $wp_customize->add_section('cta_section', [
        'title' => __('CTA Section', 'lessonlms'),
        'priority' => 115,
    ]);

    // CTA section title
    $wp_customize->add_setting('cta_section_title', [
        'default' => 'Take the next step toward your personal and professional goals with Lesson.',
    ]);

    $wp_customize->add_control('cta_section_title', [
        'label' => __('Section Title', 'lessonlms'),
        'section' => 'cta_section',
        'type' => 'text',
    ]);


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
        'label' => __('Section Title', 'lessonlms'),
        'section' => 'blog_section',
        'type' => 'text'
    ]);

    // Blog Section Description
    $wp_customize->add_setting('blog_section_description', [
        'default' => 'Read our regular travel blog and know the latest update of tour and travel',
    ]);

    $wp_customize->add_control('blog_section_description', [
        'label' => __('Section Description', 'lessonlms'),
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

function lessonlms_register_sidebar () {
    register_sidebar([
        'name' => __('Blog Sidebar', 'lessonlms'),
        'id' => 'blog_sidebar',
        'description' => __('Widgets in this area will be shown on the blog sidebar', 'lessonlms'),
        'before_widgets' => '<div class="sidebar-widget search-widget">',
        'after_widgets' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',


    ]);
}
add_action('widgets_init', 'lessonlms_register_sidebar');