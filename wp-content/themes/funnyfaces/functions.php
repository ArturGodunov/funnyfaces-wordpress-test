<?php
/**
 * Запретить уделенное наполнение сайта
 */
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
add_filter('xmlrcp_enabled','__return_false');

/**
 * Скрыть meta name='generate'
 */
remove_action('wp_head', 'wp_generator');

/**
 *
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

/**
 * Отключить верхнее меню
 */
show_admin_bar(false);

/**
 * Register our sidebars and widgetized areas.
 */
function footer_phone_widget_init() {

    register_sidebar( array(
        'name'          => 'Footer phone',
        'id'            => 'footer_phone',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

}
add_action( 'widgets_init', 'footer_phone_widget_init' );
