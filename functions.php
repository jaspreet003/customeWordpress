<?php


//load stylesheet
function load_css(){

	wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style('bootstrap');

	wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
	wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts','load_css');


//load javascript
function load_js()
{

	wp_enqueue_script('jquery');

	wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
	wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts','load_js');



//theme option
add_theme_support('menus');

add_theme_support('post-thumbnails');

add_theme_support('widgets');





//Menus
register_nav_menus(

		array(

			// id        =>  visual
			'top-menu'   => 'Top Menu Location',
			'mobile-menu'=> 'Mobile Menu Location',
			'footer-menu'=> 'Footer Menu Location',

		)
);



//custom image size
add_image_size('blog-large', 800, 400, false); //here false will not hard crop your image but keep the ratio of your image and try to fit within your range
add_image_size('blog-small', 300, 200, true); //here the true will crop your image to exact given size.




//register sidebars
function my_sidebars()
{

	register_sidebar(

		array(

			'name' => 'Page Sidebar',
			'id' => 'page-sidebar',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>'
		
		)

	);



	register_sidebar(

		array(

			'name' => 'Blog Sidebar',
			'id' => 'blog-sidebar',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>'
		
		)

	);





}

add_action('widgets_init','my_sidebars');