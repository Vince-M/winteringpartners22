<?php
/*
  Template Name: My Account Template
  */
?>

<?php get_header(); ?>

  <main>


            <!-- MAIN BODY
      =================================================== -->
      <section class="main__content account__content">
        <div class="container container__content row">
          <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
              <?php if(function_exists('bcn_display'))
              {
                  bcn_display();
              }?>
          </div>
   
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

            <?php the_content(); ?>

            <?php endwhile; else: ?>

            <p>Sorry, no pages found</p>

            <?php endif; ?>
        </div>
      </section>
      <!-- ============================================== -->

  </main>

   <?php get_footer(); ?>
