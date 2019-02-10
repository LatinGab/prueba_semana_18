<?php wp_footer() ?>
<section>
      <footer class="panel_footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <?php if ( is_active_sidebar( 'widget_footer' ) ) {
                dynamic_sidebar( 'widget_footer' );
            }; ?>

            <h3>Contáctanos:</h3>
            <p>Av. Colón 161, Providencia</p>
            <p>Teléfono: +56 2 2345 4653 </p>

          </div>

          <div class="col-md-6 col-sm-6 col-xs-12">
            <h3 style="text-align: left;">Como llegar</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.240808379001!2d-70.56362048516726!3d-33.416965680783605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cefaab864c33%3A0xe0f0903e7a8e6fd4!2sAv.+Cristobal+Colon%2C+Las+Condes%2C+Providencia%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses!2scl!4v1549749698222" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
      </div>
    </footer>

  </footer>
</section>
  </body>
</html>
