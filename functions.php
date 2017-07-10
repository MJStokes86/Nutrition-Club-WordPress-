<?php 

function nutrition_club_theme_script_enqueue() {

	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/nutrition_club_theme.css', array(), '4.8', 'all');
	
	wp_enqueue_style('customstyle1', get_template_directory_uri() . '/css/style1.css', array(), '', 'all');

	wp_enqueue_style('customstyle2', get_template_directory_uri() . '/css/style2.css', array(), '', 'all');

	wp_enqueue_style('responsive-css', get_template_directory_uri() . '/css/responsive.css');

	wp_enqueue_style('medium-css', get_template_directory_uri() . '/css/medium.css');

	wp_enqueue_style('large-css', get_template_directory_uri() . '/css/large.css');

	wp_enqueue_style('xlarge-css', get_template_directory_uri() . '/css/responsive.css');

	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.3.7', 'all');

	wp_enqueue_style('bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.css', array(), '3.3.7', 'all');

	wp_enqueue_style('magnific-popup-css', get_template_directory_uri() . '/css/magnific-popup.css', array(), '', 'all');

	wp_enqueue_style('settings-css', get_template_directory_uri() . '/css/settings.css', array(), '', 'all');

	wp_enqueue_style('effects-css', get_template_directory_uri() . '/css/effects.css', array(), '', 'all');

	wp_enqueue_style('animate-css', get_template_directory_uri() . '/css/animate.css', array(), '', 'all');

	wp_enqueue_style('portfoliolightbox-css', get_template_directory_uri() . '/css/portfoliolightbox.css', array(), '', 'all');

	wp_enqueue_style('owl-css', get_template_directory_uri() . '/css/owl.carousel.css');

	wp_enqueue_style('owl-theme-css', get_template_directory_uri() . '/css/owl.theme.css');

	wp_enqueue_style('owl-transitions-css', get_template_directory_uri() . '/css/owl.transitions.css');

	

	// wp_enqueue_style('owl-css', 'https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css');

	// wp_enqueue_style('owl-theme','https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.css');

	// wp_enqueue_style('owl-transitions','https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.min.css');

	wp_enqueue_style('font-awesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css');





    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js');
   

    
    wp_enqueue_script('jquery-tools', get_template_directory_uri() .'/js/jquery.tools.min.js', array('jquery'), '', true);

    wp_enqueue_script('jquery-portfoliolightbox', get_template_directory_uri() .'/js/jquery.portfoliolightbox.js', '', '', true);

	wp_enqueue_script('jquery-magnific-popup', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js');

	wp_enqueue_script('modernizr', get_template_directory_uri() .'/js/modernizr.min3c06.js', array(), '', true);


 	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/nutrition_club_theme.js', array('jquery', 'jquery-portfoliolightbox', 'jquery-magnific-popup','owljs'), '4.8', false);

  
    wp_enqueue_script('script1', get_template_directory_uri() .'/js/script1.js', array(), '', true);

    wp_enqueue_script('script2', get_template_directory_uri() .'/js/script2.js', array(), '', true);

    wp_enqueue_script('script3', get_template_directory_uri() .'/js/script3.js', array(), '', true);

    wp_enqueue_script('script4', get_template_directory_uri() .'/js/script4.js', array(), '', true);

    wp_enqueue_script('owljs', get_template_directory_uri() .'/js/owl.carousel.min.js', array(), '', true);


    // wp_enqueue_script('owljs', 'https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js');


    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', true);

    wp_enqueue_script('popup-galleryjs', get_template_directory_uri() . '/js/popup-gallery.js', array(), '', true);

    wp_enqueue_script('wowjs', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js');




}


add_action(wp_enqueue_scripts, 'nutrition_club_theme_script_enqueue');



function nutrition_club_theme_setup() {
	add_theme_support('menus');
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'nutrition_club_theme_setup');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

add_theme_support('post-formats', array('aside', 'image', 'video' ));
add_theme_support('html5', array('search-form'));

function nutrition_club_widget_setup() {

	register_sidebar(
		array(

			'name' => 'Sidebar',
			'id' => 'sidebar-1',
			'class' => 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h1 class="widget-title">',
			'after_title' => '</h1>',

		)
		);
}
add_action('widgets_init', 'nutrition_club_widget_setup');

function add_taxonomies_to_pages() {
	register_taxonomy_for_object_type('post_tag', 'page');
	register_taxonomy_for_object_type('category', 'page');
}

add_action('init', 'add_taxonomies_to_pages');

add_filter( 'wp_image_editors', 'change_graphic_lib' );

function change_graphic_lib($array) {
return array( 'WP_Image_Editor_GD', 'WP_Image_Editor_Imagick' );
}




















 ?>