<!-- Content Start
    <div class="container my-5">

      <div class="row">
        <div class="card">
          <?php 
            if ( have_posts() ) : 
              while ( have_posts() ) : the_post(); ?>
          <?php 
            if ( has_post_thumbnail() ) {
              the_post_thumbnail('post-thumbnail', array( 'class' => 'img-fluid' ));
            };
          ?>

          
          <div class="col-12 mt-5 px-3">
            <small class="text-muted"><?php echo get_the_date(); ?></small>
          </div>
          <div class="col-12 m-0 px-3">
              <small class="text-muted">Por <?php the_author(); ?></small>
          </div>
            <h2 class="col-12 my-3">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <div class="col-12 text-justify">
              <?php the_excerpt(); ?>
            </div>
          </div>
          <?php
            endwhile; 
            endif; 
          ?>
        </div>

      </div>
    </div>
Content End -->

    <section class="container">
        <div class="container text-center mt-5 mb-3 card pt-3 bg-dark">
          <p class="h4 text-light">Todas nuestras novedades</p>
        </div>

        <div class="row">
          <!-- Article Start -->
            <?php 
              if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); ?>

              <div class="col-12 mb-3">
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
                    <p class="container card-text text-justify">
                      <?php the_excerpt(); ?>
                    </p>
                    <div>
                    <button type="button" class="btn btn-secondary" onclick="window.location.href='<?php the_permalink(); ?>';">Leer más ...</button>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <small class="text-muted"><?php echo get_the_modified_date(); ?><br>Por <?php the_author(); ?></small>
                </div>
              </div>

            <?php
                endwhile; 
              endif; 
            ?>
          <!-- Article End -->
        </div>
    </section>