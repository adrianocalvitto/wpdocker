<?php

require_once('/var/www/html/vendor/autoload.php');
$timber = new Timber\Timber();

require_once('inc/utils.php');

add_theme_support( 'post-formats' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

add_filter( 'timber_context', 'add_to_context' );
add_filter( 'get_twig', 'add_to_twig' );