<?php

add_action( 'wp_enqueue_scripts', 'CCShop_scripts' );

function CCShop_scripts() {
 wp_enqueue_style('CCShop-style', get_template_directory_uri() . '/css/bootstrap.min.css',
array(), null);
 wp_enqueue_style('CCShop-style', get_template_directory_uri() . 'style.css' , array(), null);
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '', array(), '1.0.0', true );
}

if (function_exists( 'add_theme_support' ) ){
add_theme_support( 'post-thumbnails' );
}


register_nav_menu( 'mainmenu' , 'Главное меню' );
require_once('wp_bootstrap_navwalker.php');
register_nav_menu( 'sidebarmenu' , 'Сайдбар меню' );
require_once('wp_bootstrap_navwalker.php');

function CCShop_widjets_init(){
	if (function_exists('register_sidebar') ){
	register_sidebar( array(
		'name' => 'Правая колонка' ,
		'id' => 'right',
		'before_widget' => '<div class="wg">',
		'after_widget' => '</div>',
		'before_title' => '<div class="wg-title"><h3>',
		'after_title' => '</h3></div>',
		));
	}
}
add_action('widgets_init', 'CCShop_widjets_init');

?>