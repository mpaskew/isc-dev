<?php

// Add theme support for menus
add_theme_support('menus');

// Add sidebar widgets
function rs_widgets_init() {

	register_sidebar( array(
        'name' => 'Right Sidebar',
        'id' => 'right_sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="title">',
        'after_title' => '</div>'
	) );
}
add_action( 'widgets_init', 'rs_widgets_init' );

// Add thumbnail sizes
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'thumb-square-193', 193, 193, true ); 
	add_image_size( 'thumbnail', 150, 150, true ); 
    add_image_size( 'event-rect', 220, 170, true); // 220x170
    add_image_size( 'event-sidebar', 335, 236, true); // 220x170
    add_image_size( 'post-thumb', 302, 230, true); // 220x170
    add_image_size( 'event-home', 460, 350, true); 
    add_image_size( 'post-home', 300, 230, true); 
    add_image_size( 'about-team', 300, 180, true); 
}

// Add theme support for page featured images
add_theme_support( 'post-thumbnails', array( 'page', 'events' ) ); 
//set_post_thumbnail_size( 645, 9999, true );

// Remove unsupported admin panel options
function remove_menus () {
global $menu;
	$restricted = array(__('Comments'));
	end ($menu);
	while (prev($menu)){
		$value = explode(' ',$menu[key($menu)][0]);
		if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
	}
}
add_action('admin_menu', 'remove_menus');

// EOF