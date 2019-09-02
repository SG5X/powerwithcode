<?php


function main_styles_scripts() {
	wp_enqueue_style( 'custom-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i' );
	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	wp_enqueue_script( 'script-name', get_theme_file_uri('/js/scripts-bundled.js'), NULL, true );
    
}
add_action( 'wp_enqueue_scripts', 'main_styles_scripts' );


function academy_features(){
	register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'text_domain' )) );
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_image_size('proImg', 300, 150, false);
	add_image_size('proImgTall', 150, 300, false);

}

add_action( 'after_setup_theme', 'academy_features' );


