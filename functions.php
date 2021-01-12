<?php
//Adding CSS y JS files

function add_css_js() {

	wp_enqueue_style('style', get_stylesheet_uri());

	wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css', array(), '4.5', 'all');

	wp_enqueue_script('popperjs', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array('jquery'), 1.16, true);

	wp_enqueue_script('bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js', array('popperjs'), 4.53, true);

	//   if ( is_singular() &amp;amp;amp;&amp;amp;amp; comments_open() &amp;amp;amp;&amp;amp;amp; get_option( 'thread_comments' ) ) {
	//     wp_enqueue_script( 'comment-reply' );
	//   }
}
add_action('wp_enqueue_scripts', 'add_css_js');

//Register nav_menu

if (function_exists('register_nav_menus')) {

	register_nav_menus(array('header-menu' => 'Header Menu'));
}

//Creating a class for a in header menu

add_filter('nav_menu_link_attributes', 'class_menu', 10, 3);

function class_menu($atts, $item, $args) {

	$class = 'nav-link ml-3';
	$atts['class'] = $class;
	return $atts;

}

// Adding Thumbnail support
if (function_exists('add_theme_support')) {
	add_theme_support('post-thumbnails');
}

//Pagination

function bootstrap_pagination(\WP_Query $wp_query = null, $echo = true, $params = []) {
	if (null === $wp_query) {
		global $wp_query;
	}

	$add_args = [];

	//add query (GET) parameters to generated page URLs
	/*if (isset($_GET[ 'sort' ])) {
	        $add_args[ 'sort' ] = (string)$_GET[ 'sort' ];
*/

	$pages = paginate_links(array_merge([
		'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
		'format' => '?paged=%#%',
		'current' => max(1, get_query_var('paged')),
		'total' => $wp_query->max_num_pages,
		'type' => 'array',
		'show_all' => false,
		'end_size' => 3,
		'mid_size' => 1,
		'prev_next' => true,
		'prev_text' => __('« Anterior'),
		'next_text' => __('Siguiente»'),
		'add_args' => $add_args,
		'add_fragment' => '',
	], $params)
	);

	if (is_array($pages)) {
		//$current_page = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
		$pagination = '<div class="pagination"><ul class="pagination">';

		foreach ($pages as $page) {
			$pagination .= '<li class="page-item ' . (strpos($page, 'current') !== false ? 'active' : '') . '"> ' . str_replace('page-numbers', 'page-link', $page) . '</li>';
		}

		$pagination .= '</ul></div>';

		if ($echo) {
			echo $pagination;
		} else {
			return $pagination;
		}
	}

	return null;
}
