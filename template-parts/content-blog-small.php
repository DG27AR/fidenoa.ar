<!-- Content Start -->
<section class="container">
        <div class="container text-center mt-5 mb-3 card pt-3 bg-dark">
          <p class="h4 text-light">Publicaciones & Novedades</p>
        </div>

        <div class="row">
          <!-- Article Start -->
            <?php 
              if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); ?>

              <div class="col-12 col-sm-6 col-md-4 mb-3">
                <div class="card">
                  <a href="<?php the_permalink(); ?>">
                    <?php 
                      if ( has_post_thumbnail() ) {
                        the_post_thumbnail('post-thumbnail', array( 'class' => 'card-img-top img-fluid' ));
                      };
                    ?>
                  </a>
                  <div class="card-body">
                    <a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
                    <div>
                    <button type="button" class="btn btn-secondary" onclick="window.location.href='<?php the_permalink(); ?>';">Leer más ...</button>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Última Actualización<br><?php echo get_the_modified_date(); ?></small>
                </div>
              </div>

            <?php
                endwhile; 
              endif; 
            ?>
          <!-- Article End -->
        </div>
    </section>

    <!-- Content End -->