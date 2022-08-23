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

          <div class="container__vendors">
            

              <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

              <?php the_content(); ?>

              <?php endwhile; else: ?>

              <?php _e( 'Sorry, no pages found' ); ?>

              <?php endif; ?>
              <div class="vendors">
              <div class="vendors__col">
              <?php    
                $conferenceVendors = new WP_Query ( array(       
                  'post_type'       => 'vendors',
                  'posts_per_page'  =>  -1,
                  'paged'           =>  $paged,
    
                  
                ));
              ?>
            

            
              <?php while ( $conferenceVendors->have_posts() ) : $conferenceVendors->the_post(); ?>

              <!-- <div class="vendors__row"> -->
              
                  <div class="vendor vendor__food">
                    <h4 class="vendor__name"><?php the_field( 'vendor_name' ); ?></h4>
                    <p class="vendor__booth"><strong>Booth # </strong><?php the_field( 'vendor_booth_number' ); ?></p>
                  </div> <!-- vendor vendor__food -->
              
              <!-- </div>  -->

                <?php endwhile; ?>
            </div> <!-- vendors__col -->

            </div> <!-- vendors -->
          </div> <!-- container__vendors -->

          


          </div> <!-- vendors -->
        </div> <!-- container__vendors -->
        </div>
      </section>
      <!-- ============================================== -->



      <!-- SPONSORS
      =================================================== -->
        <?php get_template_part( 'template-parts/sponsors' ); ?>
      <!-- ============================================== -->
  </main>

   <?php get_footer(); ?>
