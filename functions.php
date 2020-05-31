<?php

function load_stylesheets()
{
    wp_register_style('stylesheet', get_template_directory_uri() . '/styles/style.css', array(), false, 'all');
    wp_register_style('slick-css', get_template_directory_uri() . '/styles/slick.css', array(), false, 'all');
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Merriweather:400,700|Nunito:400,700&display=swap', false);
    wp_enqueue_style('stylesheet');
    wp_enqueue_style('slick-css');

}

function load_scripts()
{
    wp_enqueue_script('my-script', get_template_directory_uri() . '/js/script.js', array(), true);
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/js/slick.min.js', array(), true);
    // wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/16f9e4dc96.js', array(), true);
    wp_enqueue_script("jquery");
}

add_action('wp_enqueue_scripts', 'load_stylesheets');
add_action('wp_enqueue_scripts', 'load_scripts');
add_theme_support("menus");
add_theme_support('post-thumbnails');
remove_filter('term_description', 'wpautop');
add_filter('woocommerce_price_trim_zeros', '__return_true');
register_nav_menus(

    array(

        'main' => __('Main Menu'),
        'footer-nav' => __('Footer Menu'),
        'mobile-nav' => __('Mobile Menu'),

    )

);

function remove_admin_login_header()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

function mytheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');

function arphabet_widgets_init()
{

    register_sidebar(array(
        'name' => 'Banner Header',
        'id' => 'banner_header',
        'before_widget' => '<header>',
        'after_widget' => '</header>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => 'Programs',
        'id' => 'programs',
        'before_widget' => '<div class="row">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => 'Grief Myths',
        'id' => 'myths',
        'before_widget' => '<header>',
        'after_widget' => '</header>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => 'Myths Slider',
        'id' => 'myths-slider',
    ));

    register_sidebar(array(
        'name' => 'Testimonial 1',
        'id' => 'testimonial-1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => 'Testimonial 2',
        'id' => 'testimonial-2',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => 'Testimonial 3',
        'id' => 'testimonial-3',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => 'Who We Are',
        'id' => 'who-we-are',
        'before_widget' => '<div class="col">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => 'Home CTA',
        'id' => 'home-cta',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => 'Founder Quote',
        'id' => 'founder-quote',
        'before_widget' => '<div class="col">',
        'after_widget' => '</div>',
    ));

    register_sidebar(array(
        'name' => 'Page Quote',
        'id' => 'page-quote',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => 'Commitment Header',
        'id' => 'commitment',
        'before_widget' => '<header>',
        'after_widget' => '</header>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => 'Commitment Body',
        'id' => 'commitment-content',
        'before_widget' => '<div class="col">',
        'after_widget' => '</div>',
    ));

    register_sidebar(array(
        'name' => 'About CTA',
        'id' => 'about-cta',
        'before_widget' => '<header>',
        'after_widget' => '</header>',
    ));

    register_sidebar(array(
        'name' => 'FAQ Questions',
        'id' => 'faq-questions',
        'before_widget' => '<div class="col">',
        'after_widget' => '</div>',
    ));

    register_sidebar(array(
        'name' => 'FAQ Answers',
        'id' => 'faq-answer',
        'before_widget' => '<div class="answer">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => 'All Blog Posts',
        'id' => 'blog-posts',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => 'Blog Post Footer',
        'id' => 'blog-footer',
        'before_widget' => '<div class="row">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => 'Books',
        'id' => 'books',
        'before_widget' => '<div class="col">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => 'Información en Español',
        'id' => 'informacion-espanol',
        'before_widget' => '<div class="col">',
        'after_widget' => '</div>',
    ));

    register_sidebar(array(
        'name' => 'Free Tools Icons',
        'id' => 'free-tools',
        'before_widget' => '<div class="col">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => 'Upcoming Seminars',
        'id' => 'upcoming-seminars',
        'before_widget' => '<div class="col">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => 'Join Us for a FREE Webinar',
        'id' => 'tools-cta-thankyou',
        'before_widget' => '<div class="content">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => 'Thank You Page Blogs',
        'id' => 'ty-blog-posts',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'arphabet_widgets_init');

add_filter("woocommerce_checkout_fields", "custom_override_checkout_fields");
function custom_override_checkout_fields($fields)
{
    $fields['billing']['billing_first_name']['priority'] = 1;
    $fields['billing']['billing_last_name']['priority'] = 2;
    $fields['billing']['billing_phone']['priority'] = 3;
    $fields['billing']['billing_email']['priority'] = 4;
    $fields['billing']['billing_company']['priority'] = 5;
    $fields['billing']['billing_country']['priority'] = 6;
    $fields['billing']['billing_state']['priority'] = 7;
    $fields['billing']['billing_address_1']['priority'] = 8;
    $fields['billing']['billing_address_2']['priority'] = 9;
    $fields['billing']['billing_city']['priority'] = 10;
    $fields['billing']['billing_postcode']['priority'] = 11;
    return $fields;
}

add_filter('woocommerce_checkout_fields', 'custom_rename_wc_checkout_fields');

function custom_rename_wc_checkout_fields($fields)
{
    $fields['billing']['billing_first_name']['label'] = 'First Name';
    $fields['billing']['billing_last_name']['label'] = 'Last Name';
    $fields['billing']['billing_email']['label'] = 'Email Address';
    $fields['billing']['billing_company']['label'] = 'Company Name';
    $fields['billing']['billing_postcode']['label'] = 'Zip Code';
    return $fields;
}

add_action('woocommerce_before_checkout_billing_form', 'my_custom_checkout_field');

function my_custom_checkout_field($checkout)
{

    woocommerce_form_field('referral', array(
        'type' => 'select',
        'class' => array('referral'),
        'label' => __('How did you hear about us?'),
        'options' => array(
            'default' => __('--Please select an option--', 'woocommerce'),
            'search-engine' => __('Search Engine', 'woocommerce'),
            'referral' => __('Referral', 'woocommerce'),
            'facebook' => __('Facebook', 'woocommerce'),
            'twitter' => __('Twitter', 'woocommerce'),
            'linkedin' => __('LinkedIn', 'woocommerce'),
            'instagram' => __('Instagram', 'woocommerce'),
            'youtube' => __('YouTube', 'woocommerce'),
            'other' => __('Other', 'woocommerce'),
        ),
        'default' => 'default',
    ));

}

add_filter('woocommerce_default_address_fields', 'override_default_address_fields');
function override_default_address_fields($address_fields)
{
    $address_fields['city']['label'] = __('City', 'woocommerce');
    $address_fields['postcode']['label'] = __('Zip Code', 'woocommerce');
    $address_fields['state']['label'] = __('State', 'woocommerce');
    return $address_fields;
}

function my_theme_modify_stripe_fields_styles($styles)
{
    return array(
        'base' => array(
            'color' => '#707779',
            'fontSize' => '13px',
            '::placeholder' => array(
                'color' => '#fff',
            ),
        ),
        'invalid' => array(
            'color' => '#ff7500',
        ),
        'complete' => array(
            'color' => '#0a3780',
        ),
    );
}

add_filter('wc_stripe_elements_styling', 'my_theme_modify_stripe_fields_styles');

function support_mime_types($mimes)
{
    $mimes['webp'] = 'image/webp';
    return $mimes;
}
add_filter('mime_types', 'support_mime_types');


add_filter('woocommerce_checkout_get_value','__return_empty_string', 1, 1);