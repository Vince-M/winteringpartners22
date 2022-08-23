<?php
/*
  Template Name: Sponsors Template
  */
?>

<?php get_header(); ?>

  <main>

      <!-- HERO
      =================================================== -->
        <section
          class="hero__pages"
          role="banner"
          data-type="background"
          data-speed="2"
        >
          <div
            style="
              background: url(<?php the_field( 'hero_page' ); ?>)
                no-repeat;
              background-position: center;
              background-size: cover;
              left: 50%;
              padding: 0;
              position: relative;
              -webkit-transform: translateX(-50%);
              transform: translateX(-50%);
              margin-top: 0px;
              margin-bottom: 0px;
              height: 450px;
            "
          ></div>
        </section>
      <!-- ============================================== -->

            <!-- MAIN BODY
      =================================================== -->
      <section class="main__content">
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

          <?php _e( 'Sorry, no pages found' ); ?>

          <?php endif; ?>

      </section>
      <!-- ============================================== -->

      <!-- SPONSORS SECTION
      =================================================== -->
      <?php get_template_part( 'template-parts/sponsors-page' ); ?>
      <!-- ============================================== -->

  </main>

   <?php get_footer(); ?>
