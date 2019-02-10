<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
  </head>

  <body>
    <?php
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    ?>

    <!-- barra navegación -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
            Menu <i class="fa fa-bars"></i>
          </button>

          <a class="navbar-brand page-scroll " href="#page-top"><img height="" width="150px" src="<?php echo $logo[0]; ?>" alt="">
          </a>
        </div>

          <?php if ( has_nav_menu( 'header-menu' ) ) { ?>
          	<?php wp_nav_menu( array(
          		'theme_location' 	=> 'header-menu',
          		'container_id'		=> 'navbarResponsive',
          		'container_class' 	=> 'collapse navbar-collapse navbar-right navbar-main-collapse',
          		'menu_class'     	=> 'navbar-nav nav'
          		)
          	); ?>
          <?php } ?>
        <!-- fin barra navegación  -->
      </div>
    </nav>

    <!-- Intro Header -->
    <header class="intro">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h1 class="brand-heading">Benvenuto</h1>
              <p class="intro-text">¿Que quieres comer hoy?
                <br>¡Bon Apetit!</p>
              <a href="#carta" class="btn btn-circle page-scroll">
                <i class="glyphicon glyphicon-cutlery animated"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>


    
