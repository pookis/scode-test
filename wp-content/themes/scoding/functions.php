<?php
/**
 *
 * @package scoding
 *
 */

function scoding_test()
{

    wp_enqueue_style('font-awesome-free', '//use.fontawesome.com/releases/v5.6.1/css/all.css');
    wp_enqueue_style('scoding_test_css_min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', '', time());
    wp_enqueue_style('scoding_test_css_min', get_template_directory_uri() . '/assets/css/all.min.css', '', time());
    wp_enqueue_style('scoding_test_css_nice_select', get_template_directory_uri() . '/assets/css/nice-select.css', '', time());
    wp_enqueue_style('scoding_test_css_slider', get_template_directory_uri() . '/assets/css/range-slider.css', '', time());
    wp_enqueue_style('scoding_test_css_default', get_template_directory_uri() . '/assets/css/default.css', '', time());
    wp_enqueue_style('scoding_test_css_style', get_template_directory_uri() . '/assets/css/style.css', '', time());
    wp_enqueue_style('scoding_test_css_responsive', get_template_directory_uri() . '/assets/css/responsive.css', '', time());

    wp_enqueue_script('scoding_test_js_jquery', get_template_directory_uri() . '/assets/js/jquery.min.js');
    wp_enqueue_script('scoding_test_js_poper', get_template_directory_uri() . '/assets/js/Popper.js');
    wp_enqueue_script('scoding_test_js_sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js');
    wp_enqueue_script('scoding_test_js_menu', get_template_directory_uri() . '/assets/js/jquery.meanmenu.js');
    wp_enqueue_script('scoding_test_js_carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js');
    wp_enqueue_script('scoding_test_js_slider', get_template_directory_uri() . '/assets/js/range-slider.js');
    wp_enqueue_script('scoding_test_js_bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
    wp_enqueue_script('scoding_test_js_select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js');
    wp_enqueue_script('scoding_test_js_main', get_template_directory_uri() . '/assets/js/main.js');
}

add_action('wp_enqueue_scripts', 'scoding_test');

//Removing default text editor
add_filter('use_block_editor_for_post', '__return_false', 10);