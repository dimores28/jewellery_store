<?php

add_action( 'wp_enqueue_scripts', function() {

	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.min.css');

	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/app.min.js', array(), 'null', true );
});

add_theme_support('post-thumbnails');
add_theme_support( 'title-tag' );
add_theme_support('custom-logo');

add_action('after_setup_theme', function() {
	add_theme_support( 'menus' );
	register_nav_menu( 'header-menu', 'header-menu' );
	// register_nav_menu( 'footer-menu', 'footer-menu' );
});

  // Change the id attribute of the li tag
add_filter( 'nav_menu_item_id', 'filter_menu_item_css_id', 10, 4 );
function filter_menu_item_css_id( $menu_id, $item, $args, $depth ) {
	return $args->theme_location === 'header-menu' ? '' : $menu_id;
}

// Change the class attribute of the li tag
add_filter( 'nav_menu_css_class', 'filter_nav_menu_css_classes', 10, 4 );
function filter_nav_menu_css_classes( $classes, $item, $args, $depth ) {
	if ( $args->theme_location === 'header-menu' ) {

		if ($depth == 1) {
			$classes = [
				'submenu__item',
			];
		} else {
			$classes = [
				'menu__item',
				'menu__item_list',
				'dropdown'
			];
		}


		if ( $item->current ) {
			$classes[] = 'menu__item_active';
		}
	}

	return $classes;
}

// Changes the class of a nested ul
add_filter( 'nav_menu_submenu_css_class', 'filter_nav_menu_submenu_css_class', 10, 3 );
function filter_nav_menu_submenu_css_class( $classes, $args, $depth ) {
	if ( $args->theme_location === 'header-menu' ) {
		$classes = [
			'submenu',
		];
	}

	return $classes;
}

function add_specific_menu_location_atts( $atts, $item, $args ) {
    if( $args->theme_location === 'header-menu' ) {
      $atts['class'] = 'menu__link';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );


add_action('widgets_init', function(){

	register_sidebar([
		'name'          => 'Our stores',
		'id'            => 'sidebar-footer-left',
		'description'   => 'Displayed on the left side of the basement',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => "</div>\n",
	]);

	register_sidebar([
		'name'          => 'Useful links',
		'id'            => 'sidebar-footer-right',
		'description'   => 'Displayed on the left side of the basement',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => "</div>\n",
	]);
});

add_action( 'init', function () {

});


function getProducts($prodCategory = 'Jewelry', $numberSlides = -1) {

	$args = get_posts( array(
		'numberposts' => -1,
		'posts_per_page' => $numberSlides,
		'orderby' => 'menu_order',
		'order' => 'ASC',
		'post_type' => 'product',
		'tax_query' => array(
			array(
				'taxonomy' => 'product_cat',
				'field' => 'slug',
				'terms' => $prodCategory,
			)
		)
	) );

	$products = [];
	foreach($args as $post) {
		$product['title'] = $post->post_title;
		$product['img'] = get_the_post_thumbnail_url($post->ID, 'thumbnail');

		$pr = wc_get_product($post->ID);  
		$product_price = $pr->get_price(); 
		$product['price'] = wc_price($product_price);

		$product_categories = wp_get_post_terms($post->ID, 'product_cat');
		if (!empty($product_categories) && !is_wp_error($product_categories)) {
			$product['category'] = '';
			foreach ($product_categories as $category) {
				$product['category'] .= $category->name . '<br/>';
			}
		}


		$products[] = $product;
	}

	return $products;
}

