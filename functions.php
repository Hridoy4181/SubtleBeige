<?php

// to add title in the theme.
add_theme_support( 'title-tag' );

// to add the background of the body of the theme.
add_theme_support( 'custom-background' );

// to add default picture in the theme.
add_theme_support(
	'custom-header',
	array(
		'default-image' => get_template_directory_uri() . '/images/header.png',
	)
);

// to add featured image in the post.
add_theme_support( 'post-thumbnails' );

// loading textdomain in the theme.
load_theme_textdomain( 'subtle', get_template_directory_uri() . '/languages' );

// menu register in theme.
register_nav_menus(
	array(
		'mainmenu'   => __( 'Main Menu', 'subtle' ),
		'footermenu' => __( 'Footer Menu', 'subtle' ),
	)
);
