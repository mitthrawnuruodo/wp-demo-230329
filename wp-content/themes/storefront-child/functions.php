<?php
add_action( 'wp_enqueue_scripts', 'more_styles', 11 );
function more_styles() {
    wp_enqueue_style( 'additional-style',
        get_stylesheet_directory_uri() . '/css/additional.css',
        array(), wp_get_theme()->get('Version'), 'all'
    );
}

if ( ! function_exists( 'storefront_credit' ) ) {
	/**
	 * Display the theme credit
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function storefront_credit() {
		
        echo '<p class="site-description">' . esc_html( get_bloginfo( 'description', 'display' ) ) . '</p>';
				
	}
}

?>