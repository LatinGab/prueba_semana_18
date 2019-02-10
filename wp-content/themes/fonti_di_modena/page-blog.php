<?php get_header();?>
jjj
<div class="container">
 <div class="row">
   <?php
     $arg = array(
       'post_type'		 => 'post',
       'posts_per_page' => -1
     );
     $get_arg = new WP_Query( $arg );
     while ( $get_arg->have_posts() ) {
       $get_arg->the_post();
     ?>
       <div class="col-md-4 mt-5">
         <?php the_post_thumbnail('custom-size-blog', array('class'=>'img-fluid mb3')) ?>
         <h4><?php the_title() ?></h4>
         <p><?php the_excerpt() ?></p>
         <a class="btn btn-primary" href="<?php get_permalink() ?>">Léeme xvzvxvxcompleto</a>
       </div>
     <?php } wp_reset_postdata();
   ?>
 </div>
</div>

 <?php get_footer(); ?>
