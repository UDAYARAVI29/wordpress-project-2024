<?php
// Enqueue stylesheets
function my_theme_enqueue_styles() {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/plugins/bootstrap.min.css');

    // Font Icons
    wp_enqueue_style('iconfont', get_template_directory_uri() . '/css/icons/iconfont.css');
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');

    // Google Fonts
    wp_enqueue_style('google-fonts', 'http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic');

    // Plugins Stylesheets
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/css/plugins/magnific-popup.css');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/css/plugins/owl.carousel.css');
    wp_enqueue_style('loaders', get_template_directory_uri() . '/css/plugins/loaders.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/plugins/animate.css');
    wp_enqueue_style('pickadate-default', get_template_directory_uri() . '/css/plugins/pickadate-default.css');
    wp_enqueue_style('pickadate-default-date', get_template_directory_uri() . '/css/plugins/pickadate-default.date.css');

    // Custom Stylesheet
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/style.css');

    // Responsive Fixes
    wp_enqueue_style('responsive-style', get_template_directory_uri() . '/css/responsive.css');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

// HTML5 Shim and Respond.js for IE8 support
function my_theme_ie_support_scripts() {
    // Conditional IE9 and below check
    if ( !is_admin() && ( preg_match('/(?i)msie [1-9]/', $_SERVER['HTTP_USER_AGENT'] ) ) ) {
        wp_enqueue_script('html5-shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', array(), '3.7.2');
        wp_enqueue_script('respond', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', array(), '1.4.2');
    }
}
add_action('wp_enqueue_scripts', 'my_theme_ie_support_scripts');
