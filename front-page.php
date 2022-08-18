<?php get_header(); ?>

  <main>

      <!-- HERO
    =================================================== -->
      <section class="hero feature">
        <div class="hero__index--headline"></div>
        <div
          class="hero__index"
          style="
            background: url(<?php the_field( 'index_hero' ); ?>) no-repeat;
            background-position: top;
            background-size: cover;
          "
        ></div>
      </section>
      <!-- ============================================== -->

      <!-- PANELS
    =================================================== -->
      <section class="panels panels__halfWidth">
        <div class="panels__halfWidth--conf" style="background: url(<?php the_field( 'conference_panel' ); ?> ) no-repeat; background-position: top center;">
          
            <h2><a href="<?php echo site_url( '/conference-schedule' ); ?>">Conference</a></h2>
          
        </div>
        <div class="panels__halfWidth--pharm" style="background: url(<?php the_field( 'pharmacy_panel' ); ?> ) no-repeat; background-position: top center;">
          
            <h2><a href="<?php echo site_url( '/pharmacy-schedule' ); ?>">Pharmacy</a></h2>
          
        </div>
      </section>
      <section class="panels panels__fullWidth" style="background: url(<?php the_field( 'tradeshow_panel' ); ?> ) no-repeat; background-position: top center;">
        <div class="panels__fullWidth--trade panels_fullWidth--trade">
          <a href="#">
            <h2>TradeShow</h2>
          </a>
        </div>
      </section>
      <section>
        <div class="panels__fullBanner row">
          <?php the_field( 'conference_banner' ); ?>
        </div>
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
              ><?php 
                $image = get_field('sponsor_coca_cola_canada');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
                <?php endif; ?></a>
          </div>

          <div class="sponsors__norWester--logos">
            <a href="https://www.corporate.nestle.ca/en" target="_blank"
              ><?php 
                $image = get_field('sponsor_nestle_canada');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
                <?php endif; ?></a>
          </div>

          <div class="sponsors__norWester--logos">
            <a href="https://www.pepsico.ca/" target="_blank"
              ><?php 
                $image = get_field('sponsor_arctic_ice');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
                <?php endif; ?>
            </a>
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
