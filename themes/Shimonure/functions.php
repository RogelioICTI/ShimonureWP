<?php

//Agregado de hojas de estilo
if( !is_admin()){
    wp_enqueue_style('bootstrap-custom',get_template_directory_uri() . '/css/theme.css');
    wp_enqueue_style('adapataciones-custom',get_template_directory_uri() . '/css/extras.css');
}
        
wp_enqueue_style('googlefont-ptsans','https://fonts.googleapis.com/css?family=PT+Sans');
wp_enqueue_style('googlefont-dosis', 'https://fonts.googleapis.com/css?family=Dosis');
wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');

//Agregegado de Scripts
if( !is_admin()){
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), '1.0', true);
	wp_enqueue_script('jquery');
}
wp_enqueue_script('bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0', true);
wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/js/jquery.easing.min.js', array(), '1.0', true);
wp_enqueue_script('scroll-custom', get_template_directory_uri() . '/js/scroll_extra.js', array(), '1.0', true);


/*
 * Ajuste para cuando tenemos sesión abierta de administración
 */
add_filter('wp_head', 'mbe_wp_head');
function mbe_wp_head(){
    echo '<style>'.PHP_EOL;
    echo '.navbar-fixed-top { top: auto; }';
    echo '</style>'.PHP_EOL;
}
