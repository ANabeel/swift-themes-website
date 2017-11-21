<?php
	
function swift_script_enqueue() {
	
	wp_enqueue_style( 'theme-styles', get_stylesheet_directory_uri() . '/style.css', array(), filemtime( get_stylesheet_directory() . '/style.css' ) );
	
}

add_action( 'wp_enqueue_scripts', 'swift_script_enqueue');

//read more button
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( 'Read More &rarr;', 'your-text-domain' ) . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

// Removing pages from search results

function mySearchFilter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
    }
add_filter('pre_get_posts','mySearchFilter');

// Removing front end admin bar because it's ugly

add_filter('show_admin_bar', '__return_false');