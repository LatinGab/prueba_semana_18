<?php get_header(); ?>

<?php
/*
 * Loop through Categories and Display Posts within
 */
$post_type = 'post';//"feature"

// Get all the taxonomies for this post type
$taxonomies = get_object_taxonomies( array( 'post_type' => $post_type ) );

foreach( $taxonomies as $taxonomy ) :

    // Gets every "category" (term) in this taxonomy to get the respective posts
    $terms = get_terms( $taxonomy );

    foreach( $terms as $term ) : ?>

        <?php
        $args = array(
                'post_type' => $post_type,
                'posts_per_page' => -1,  //show all posts
                'tax_query' => array(
                    array(
                        'taxonomy' => $taxonomy,
                        'field' => 'slug',
                        'terms' => $term->slug,
                    )
                )

            );
        $posts = new WP_Query($args);

        if( $posts->have_posts() ): ?>

         <?php $categoria= $term->name; ?>
         <section id="<?php echo $categoria ?>" class="container content-section text-center">
           <h2><?php echo $categoria ?></h2>
             <div class="container">
                <div class="row centrar">

        <?php while( $posts->have_posts() ) : $posts->the_post(); ?>

            <div class="col-md-3 col-sm-6 col-xs-6">
              <div class="thumbnail thumbnail_carta">
              <?php the_post_thumbnail('custom-size-blog', array('class'=>'img-fluid mb3')) ?>
              <h2 class="titulo_carta"><?php the_title() ?></h2>
              <div class="parrafo_carta"><?php the_excerpt() ?></div>
              </div>
            </div>

        <?php endwhile;?>
        </div>
      </div>
    </section>
      <?php endif; ?>

    <?php endforeach;

endforeach; ?>

______________

<section id="antipastos" class="container content-section text-center">
  <h2>Antipastos1234</h2>
<div class="container">
 <div class="row centrar">
   <?php
     $arg = array(
       'post_type'		 => 'post',
       'posts_per_page' => -1
     );
     $get_arg = new WP_Query( $arg );
     while ( $get_arg->have_posts() ) {
       $get_arg->the_post();
       if ( in_category( '2' ) ) : ?>
         <div class="col-md-3 col-sm-6 col-xs-6">
           <div class="thumbnail thumbnail_carta">
           <?php the_post_thumbnail('custom-size-blog', array('class'=>'img-fluid mb3')) ?>
           <h2 class="titulo_carta"><?php the_title() ?></h2>
           <div class="parrafo_carta"><?php the_excerpt() ?></div>
           </div>
         </div>
 	<?php endif; ?>
     <?php } wp_reset_postdata();
   ?>
 </div>
</div>
</section>




<section id="antipastos" class="container content-section text-center">
  <h2>Antipastos</h2>
<div class="container">
 <div class="row centrar">
   <?php
     $arg = array(
       'post_type'		 => 'post',
       'posts_per_page' => -1
     );
     $get_arg = new WP_Query( $arg );
     while ( $get_arg->have_posts() ) {
       $get_arg->the_post();
       if ( in_category( '2' ) ) : ?>
         <div class="col-md-3 col-sm-6 col-xs-6">
           <div class="thumbnail thumbnail_carta">
           <?php the_post_thumbnail('custom-size-blog', array('class'=>'img-fluid mb3')) ?>
           <h2 class="titulo_carta"><?php the_title() ?></h2>
           <div class="parrafo_carta"><?php the_excerpt() ?></div>
           </div>
         </div>
 	<?php endif; ?>
     <?php } wp_reset_postdata();
   ?>
 </div>
</div>
</section>
<!-- Sección Ensaladas -->

<section id="ensaladas" class="container content-section text-center">
  <h2>Ensaladas</h2>
<div class="container">
 <div class="row centrar">
   <?php
     $arg = array(
       'post_type'		 => 'post',
       'posts_per_page' => -1
     );
     $get_arg = new WP_Query( $arg );
     while ( $get_arg->have_posts() ) {
       $get_arg->the_post();
       if ( in_category( '3' ) ) : ?>
         <div class="col-md-3 col-sm-6 col-xs-6">
           <div class="thumbnail thumbnail_carta">
           <?php the_post_thumbnail('custom-size-blog', array('class'=>'img-fluid mb3')) ?>
           <h2 class="titulo_carta"><?php the_title() ?></h2>
           <div class="parrafo_carta"><?php the_excerpt() ?></div>
           </div>
         </div>
 	<?php endif; ?>
     <?php } wp_reset_postdata();
   ?>
 </div>
</div>
</section>

<!--Resaturant Carrousel-->
<div class="row centrar">
  <div class="col-md-12">
    <!--Carrousel Carrousel Carrousel-->
    <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
      <!-- Carousel indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <!-- Carousel items -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php echo get_template_directory_uri()?>/assets/img/slide_1.jpg" alt="First Slide">
          <div class="carousel-caption">
            <h2>Acogedores y cómodos espacios</h2>
          </div>
        </div>

        <div class="item">
          <img src="<?php echo get_template_directory_uri()?>/assets/img/slide_2.jpg" alt="Second Slide">
          <div class="carousel-caption">
            <h2>¡Reserva tu mesa y disfruta!</h2>
          </div>
        </div>

        <div class="item">
          <img src="<?php echo get_template_directory_uri()?>/assets/img/slide_3.jpg" alt="Third Slide">
          <div class="carousel-caption">
            <h2>Bon Apetit</h2>
          </div>
        </div>

      </div>
      <!-- Carousel nav -->
      <div>
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
  </div>
</div>

<!--fin Carrousel-->

<?php get_footer(); ?>
