<?php

function TemaArthuro_resources(){
	wp_enqueue_style('style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'TemaArthuro_resources');

wp_register_script('jquery', get_template_directory_uri().'/js/jquery.min.js');
wp_enqueue_script('jquery');

wp_register_script('skel', get_template_directory_uri(). '/js/skel.min.js');
wp_enqueue_script('skel');

wp_register_script('util', get_template_directory_uri().'/js/util.js');
wp_enqueue_script('util');

wp_register_script('main', get_template_directory_uri().'/js/main.js');
wp_enqueue_script('main');

register_nav_menus(array(
	'primary' => __('Primary Menu'),
));

?>