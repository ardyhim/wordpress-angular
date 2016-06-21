<?php

function ag_script(){
  wp_enqueue_style('default',get_template_directory_uri().'/style.css', false, NULL,'all');
  wp_register_script(
		'angularjs',
		get_stylesheet_directory_uri() . '/angular/angular.js'
	);
	wp_register_script(
		'angularjs-route',
		get_stylesheet_directory_uri() . '/angular/angular-route.js'
	);
	wp_enqueue_script(
		'my-scripts',
		get_stylesheet_directory_uri() . '/angular/app.js',
		array( 'angularjs', 'angularjs-route' )
	);
	wp_localize_script(
		'my-scripts',
		'myLocalized',
		array(
			'views' => trailingslashit( get_template_directory_uri() ) . 'views/'
			)
	);
}
add_action('wp_enqueue_scripts','ag_script');

?>
