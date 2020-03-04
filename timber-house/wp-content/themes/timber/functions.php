<?php


add_action( 'wp_enqueue_scripts', 'timber_style' );


function timber_style() {


    wp_enqueue_style( 'normalize-style', get_template_directory_uri() .'/assets/libs/normalize.css' );
    wp_enqueue_style( 'magnific-popup-style', get_template_directory_uri() .'/assets/libs/magnific-popup.css' );
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
	
}

    // Регистируем файл с JS скриптом
wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', array(), '1.0', false);
    // Подключаем файл с JS скриптом
wp_enqueue_script( 'jquery');

    // Подключаем файл с JS скриптом сразу без регистрации
wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), '1.0', true );
wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );


