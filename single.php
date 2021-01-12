<?php get_header( ); ?>

    <!-- Content Start -->

    <div class="container my-5">
      <!-- Article Start -->
      <article class="card-body">
      <div class="row">
        <?php 
                if ( have_posts() ) : 
                  while ( have_posts() ) : the_post(); ?>
        
        <div class="col-12">
          <small class="text-muted">Úlima Actualización <?php echo get_the_modified_date(); ?></small>
        </div>
        <div class="col-12">
          <h2 class="mt-1 mb-4">
            <?php the_title(); ?>
          </h2>
        </div>
        <div class="col-12">
        <?php 
          if ( has_post_thumbnail() ) {
            the_post_thumbnail('post-thumbnail', array( 'class' => 'card-img-top img-fluid' ));
            };
        ?>
          <div class="text-justify mt-5">
            <?php the_content(); ?>
          </div>
        </div>
        <?php
          endwhile; 
          endif; 
        ?>
      </article>
      <!-- Article End -->
    </div>

    <!-- Content End -->

    <?php get_template_part('template-parts/content', 'sponsors'); ?>

    <?php get_footer( ); ?>
