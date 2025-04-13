<?php
if (!defined('ABSPATH')) {
    exit;
}
function mitema_enqueue_styles() {
    wp_enqueue_style(
        'mitema-style', // identificador del estilo
        get_template_directory_uri() . '/assets/css/style.css', // ruta al CSS
        array(), // dependencias (vacío si no hay)
        filemtime(get_template_directory() . '/assets/css/style.css'), // versión automática (para evitar caché)
        'all' // medios (all, screen, print, etc.)
    );
}
add_action('wp_enqueue_scripts', 'mitema_enqueue_styles');

add_theme_support('post-thumbnails');


function mi_menu() {
    register_nav_menus(array(
        'menu-principal' => __('Menú Principal', 'mi-tema')
    ));
}
add_action('after_setup_theme', 'mi_menu');

function mi_tema_widgets_init() {
    register_sidebar(array(
        'name'          => __('Barra Lateral Principal', 'mi-tema'),
        'id'            => 'sidebar-principal',
        'description'   => __('Widgets que aparecerán en la barra lateral principal.', 'mi-tema'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'mi_tema_widgets_init');
function mis_scripts() {
    wp_enqueue_style('estilos-tema', get_stylesheet_uri());
    wp_enqueue_script(
        'script-personalizado',
        get_template_directory_uri() . '/js/script.js',
        array('jquery'),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'mis_scripts');
?>