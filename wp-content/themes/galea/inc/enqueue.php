<?php

    function galea_vendor_scripts() {

        //Swiper
        wp_enqueue_script( 'vendor-script-swiper', get_template_directory_uri() . '/vendor/js/swiper.min.js', array(), '20190409', true );
    	wp_enqueue_style( 'vendor-styles-swiper', get_template_directory_uri() . '/vendor/css/swiper.min.css' );
    }
    add_action( 'wp_enqueue_scripts', 'galea_vendor_scripts' );
    
    function galea_custom_scripts() {
        
        wp_enqueue_script( 'galea-scripts', get_template_directory_uri() . '/dist/js/main.min.js', array('jquery', 'vendor-script-swiper'), '20190722', true );
        wp_enqueue_style( 'galea-styles', get_template_directory_uri() . '/dist/css/main.css' );
    }
    add_action( 'wp_enqueue_scripts', 'galea_custom_scripts' );