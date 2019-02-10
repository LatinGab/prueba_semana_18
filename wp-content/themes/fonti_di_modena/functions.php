<?php

  // REGISTRO DE ESTILOS

  function register_enqueue_style() {
  		$theme_data = wp_get_theme();

  		/* Registrando estilos */
  		wp_register_style('bootstrap', get_parent_theme_file_uri('/assets/vendor/css/bootstrap.css'), null, '1.0.0', 'screen');
  		wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.1.0/css/all.css', null, '1.0.0', 'screen');
  		wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Merriweather:400,700|Open+Sans:400,700');
  	  //wp_register_style('magnificPopup', get_parent_theme_file_uri('/assets/vendor/css/magnific-popup.css'), null, '1.0.0', 'screen');
  	  wp_register_style('main', get_parent_theme_file_uri('/assets/css/il_fonti.css'), null, '1.0.0', 'screen');
      wp_register_style('owl.carousel.min', get_parent_theme_file_uri('/assets/vendor/css/owl.carousel.min.css'), null, '1.0.0', 'screen');

  		/* Enqueue estilos */
  		wp_enqueue_style('bootstrap');
  		wp_enqueue_style('fontawesome');
  		wp_enqueue_style('googleFonts');
  		wp_enqueue_style('magnificPopup');
      wp_enqueue_style('owl.carousel.min');
  		wp_enqueue_style('main');
	}

	add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );

  // REGISTRO DE SCRIPTS

  function register_enqueue_scripts() {
		$theme_data = wp_get_theme();

		/* Deregister Scripts */
		wp_deregister_script( 'jquery' );
		wp_deregister_script( 'jquery-migrate' );

		/* Registrando Scripts */
		wp_register_script('jQuery3', get_parent_theme_file_uri('/assets/vendor/js/jquery.min.js'), null, '3.2.1', true);
		wp_register_script('jQuery_migrate', get_parent_theme_file_uri('/assets/vendor/js/jquery-migrate.min.js'), array('jQuery3'), '3.0.0', true);
		wp_register_script('bootstrap', get_parent_theme_file_uri('/assets/vendor/js/bootstrap.min.js'), array('jQuery_migrate'), null, true);
		wp_register_script('easingJquery', get_parent_theme_file_uri('/assets/vendor/js/jquery.easing.min.js'), array('jQuery_migrate'), null, true);
		wp_register_script('scrollReveal', get_parent_theme_file_uri('/assets/vendor/js/scrollreveal.min.js'), array('jQuery_migrate'), null, true);
		//wp_register_script('magnificPopup', get_parent_theme_file_uri('/assets/vendor/js/jquery.magnific-popup.min.js'), array('jQuery_migrate'), null, true);
		wp_register_script('mainJS', get_parent_theme_file_uri('assets/js/carta.js'), array('jQuery3'), null, true);
    wp_register_script('owl.carousel.min', get_parent_theme_file_uri('assets/vendor/js/owl.carousel.min.js'),null, null, true);

		/* Enqueue Scripts */
    wp_enqueue_script('jQuery3');
    wp_enqueue_script('jQuery_migrate');
		wp_enqueue_script('bootstrap');
		wp_enqueue_script('easingJquery');
		wp_enqueue_script('scrollReveal');
		wp_enqueue_script('owl.carousel.min');
		wp_enqueue_script('mainJS');
	}

	add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );

//logo personalizado
function config_custom_logo() {
  add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
  ));
}

add_action( 'after_setup_theme', 'config_custom_logo' );

//tamaños personalizados
function thumbnails_setup() {
  add_theme_support( 'post-thumbnails' );
}

function dl_image_sizes( $sizes ) {

  $add_sizes = array(
    'portfolio-home'		=> __( 'Tamaño de las imágenes del portafolio en el home' ),
    'square'				=> __( 'Tamaño personalizado para hacer cuadradas las imágenes' ),
    'post-custom-size'	=> __( 'Tamaño personalizado para la imagen destada de los post' ),
    'custom-size-blog'	=> __( 'Tamaño personalizado para la imagen destada de los post' )
  );

  return array_merge( $sizes, $add_sizes );

}

if ( function_exists( 'add_theme_support' ) ) {

  add_image_size( 'portfolio-home', 465, 250, true );
  add_image_size( 'square', 400, 400, true );
  add_image_size( 'post-custom-size', 800, 600, true );
  add_image_size( 'custom-size-blog', 400, 300, true );

  add_filter( 'image_size_names_choose', 'dl_image_sizes' );

}

add_action( 'after_setup_theme', 'thumbnails_setup' );

//Menus personalizados

function menus_setup() {
	register_nav_menus(
		array(
			'header-menu'	=> __( 'Header Menu' ),
			'footer-menu'	=> __( 'Footer Menu' ),
		)
	);
}

add_action( 'after_setup_theme', 'menus_setup' );

//Custom post_type platos carta

function Platos_Carta() {

	$labels = array(
		'name'                  => _x( 'Platos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Plato', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Platos Carta', 'text_domain' ),
		'name_admin_bar'        => __( 'Platos Carta', 'text_domain' ),
		'archives'              => __( 'Platos Archivados', 'text_domain' ),
		'attributes'            => __( 'Platos Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Todos los Platos', 'text_domain' ),
		'add_new_item'          => __( 'Agregar nuevo plato', 'text_domain' ),
		'add_new'               => __( 'Agregar Plato', 'text_domain' ),
		'new_item'              => __( 'Nuevo Plato', 'text_domain' ),
		'edit_item'             => __( 'Editar Plato', 'text_domain' ),
		'update_item'           => __( 'Publicar Plato', 'text_domain' ),
		'view_item'             => __( 'Ver Plato', 'text_domain' ),
		'view_items'            => __( 'Ver Platos', 'text_domain' ),
		'search_items'          => __( 'Buscar plato', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Definir como imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Quitar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Plato', 'text_domain' ),
		'description'           => __( 'Personalización de carta menu', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-clipboard',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'platos', $args );

}
add_action( 'init', 'Platos_Carta', 0 );

//widgets

function dl_widgets() {
  register_sidebar( array(
    'name' => 'Widget Footer',
    'id' => 'widget_footer'
  ));
}

add_action('widgets_init', 'dl_widgets');


?>
