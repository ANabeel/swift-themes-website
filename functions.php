<?php


function loady() {
		wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'loady');
function swift_script_enqueue() {
	
	wp_enqueue_style( 'theme-styles', get_stylesheet_directory_uri() . '/style.css', array(), filemtime( get_stylesheet_directory() . '/style.css' ) );
	//wp_enqueue_script('swiftyjqjs', get_template_directory_uri() . '/swifty.js');
	
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



/*function swifty_script_enqueue() {
	wp_enqueue_script('swiftyjs', get_template_directory_uri() . '/swifty.js');
}
add_action('wp_enqueue_scripts', 'swifty_script_enqueue');*/


function new_wp_trim_excerpt($text) {
	$raw_excerpt = $text;
	if ( '' == $text ) {
		$text = get_the_content('');

		$text = strip_shortcodes( $text );

		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]>', $text);
		$text = strip_tags($text, '<a>');
		$excerpt_length = apply_filters('excerpt_length', 55);

		$excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
		$words = preg_split('/(<a.*?a>)|\n|\r|\t|\s/', $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_DELIM_CAPTURE );
		if ( count($words) > $excerpt_length ) {
			array_pop($words);
			$text = implode(' ', $words);
			$text = $text . $excerpt_more;
		} else {
			$text = implode(' ', $words);
		}
	}
	return apply_filters('new_wp_trim_excerpt', $text, $raw_excerpt);

}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'new_wp_trim_excerpt');

?>
