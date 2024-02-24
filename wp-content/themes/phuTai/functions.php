<?php


add_filter( 'show_admin_bar', '__return_false' );


add_theme_support('post-thumbnails');

function m_register_menu()
{
	register_nav_menus(
		array(
			'menu-1' => __('Menu PC'),
			
			'menu-2' => __('Menu Language'),
			'menu-3' => __('Menu Footer1'),
			'menu-4' => __('Menu Footer2'),
			'menu-5' => __('Menu Footer5'),
			'menu-6' => __('Menu da op'),
		)
	);
}
add_action('init', 'm_register_menu');


if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}
function shapeSpace_display_search_form() {
	$search_form = '<form method="get" id="search-form-alt" action="'. esc_url(home_url('/')) .'">
		<input type="text" name="s" id="s">
	</form>';
	return $search_form;
}
add_shortcode('display_search_form', 'shapeSpace_display_search_form');