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
          <div class="breadcrumbs">
            <p class="breadcrumb">
              <?php if (function_exists('tsh_wp_custom_breadcrumbs')) tsh_wp_custom_breadcrumbs(); ?>
            </p>
          </div>
   
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

          <?php the_content(); ?>

          <?php endwhile; else: ?>

          <?php _e( 'Sorry, no pages found' ); ?>

          <?php endif; ?>

      </section>
      <!-- ============================================== -->



      <!-- SPONSORS
      =================================================== -->
      <section class="sponsors">
        <div class="sponsors__banner">
          <h2>Sponsors</h2>
          <h3>Nor'Westors</h3>
        </div>
        <div class="sponsors__norWester container row">
          <div class="sponsors__norWester--logos">
            <a href="https://cokecanada.com/" target="_blank"
              ><img
                src="img/sponsors/coca-cola_400x175-min.jpg"
                alt="Coca Cola Canada Bottling Limited"
                width="400"
                height="auto"
            /></a>
          </div>
          <div class="sponsors__norWester--logos">
            <a href="https://www.corporate.nestle.ca/en" target="_blank"
              ><img
                src="img/sponsors/nestle_395x306.svg"
                alt="Nestle Canada"
                width="395"
                height="auto"
            /></a>
          </div>
          <div class="sponsors__norWester--logos">
            <a href="https://www.pepsico.ca/" target="_blank"
              ><img
                src="img/sponsors/arctic-pepsi_400x175.svg"
                alt="Arctic Ice, Pepsi Co. and Frito Lay"
                width="400"
                height="auto"
            /></a>
          </div>
          <div class="sponsors__norWester--logos">
            <a href="https://hqfinefoods.com/" target="_blank"
              ><img
                src="img/sponsors/HQ-Fine-Foods_400x200.svg"
                alt="HQ Fine Foods"
                width="387"
                height="auto"
            /></a>
          </div>
          <div class="sponsors__norWester--logos">
            <a href="https://dufresne.ca/" target="_blank"
              ><img
                src="img/sponsors/dufresne_200x32.svg"
                alt="Dufresne"
                width="395"
                height="auto"
            /></a>
          </div>
        </div>

        <div class="sponsors__banner">
          <h3>The Fur Traders</h3>
        </div>
        <div class="sponsors__furTrader container row">
          <div class="sponsors__furTrader--logos">
            <a href="#"
              ><img
                src="img/sponsors/wonderbrands_399x65.svg"
                alt="Wonderbrands logo"
                width="390"
            /></a>
          </div>
          <div class="sponsors__furTrader--logos">
            <a href="https://www.mapleleaffoods.com/" target="_blank"
              ><img
                src="img/sponsors/maple-leaf_184x200.svg"
                alt="Maple Leaf foods logo"
                width="300"
            /></a>
          </div>
          <div class="sponsors__furTrader--logos">
            <a href="https://www.olddutchfoods.ca/" target="_blank"
              ><img
                src="img/sponsors/oldDutch_300x223.svg"
                alt="Old Dutch logo"
                width="200"
                height="auto"
            /></a>
          </div>
          <div class="sponsors__furTrader--logos">
            <a href="https://pg.ca/en-ca/" target="_blank"
              ><img
                src="img/sponsors/Proctor-Gamble_200x200.svg"
                alt="P&G logo"
                width="200"
            /></a>
          </div>
          <div class="sponsors__furTrader--logos">
            <a href="https://www.unilever.ca/" target="_blank"
              ><img
                src="img/sponsors/unilever_200x220.svg"
                alt="Unilever logo"
                width="200"
            /></a>
          </div>
        </div>

        <div class="sponsors__banner">
          <h3>Meal Sponsors</h3>
        </div>
        <div class="sponsors__mealSponsors container row">
          <div class="sponsors__mealSponsors--logos">
            <a href="https://corpo.metro.ca/en/home.html" target="_blank"
              ><img
                src="img/sponsors/metro_397x88.svg"
                alt="Metro Richelieu Inc."
                width="397"
            /></a>
          </div>
          <div class="sponsors__mealSponsors--logos">
            <a href="https://www.sysco.ca/location/winnipeg/" target="_blank"
              ><img
                src="img/sponsors/Sysco_300x160.svg"
                alt="Sysco Food Services of Winnipeg"
                width="300"
            /></a>
          </div>
          <div class="sponsors__mealSponsors--logos">
            <a href="http://parmalat.ca/" target="_blank"
              ><img
                src="img/sponsors/lactalis_399x135.svg"
                alt="Lactalis Canada"
                width="399"
            /></a>
          </div>
          <div class="sponsors__mealSponsors--logos">
            <a href="https://wonderbrands.com/" target="_blank"
              ><img
                src="img/sponsors/wonderbrands_399x65.svg"
                alt="Wonderbrands logo"
                width="3900"
            /></a>
          </div>
        </div>
      </section>
      <!-- ============================================== -->
  </main>

   <?php get_footer(); ?>
