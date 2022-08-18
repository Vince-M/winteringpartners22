<section class="sponsors">
        <div class="sponsors__banner">
          <h2>Sponsors</h2>
          <h3>Nor'Westors</h3>
        </div>
        <div class="sponsors__norWester container row">

          <div class="sponsors__norWester--logos">
            <a href="https://cokecanada.com/" target="_blank">
              <?php 
                $image = get_field('sponsor_coca_cola_canada');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>
            </a>
          </div>

          <div class="sponsors__norWester--logos">
            <a href="https://www.corporate.nestle.ca/en" target="_blank">
              <?php 
                $image = get_field('sponsor_nestle_canada');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>
            </a>
          </div>

          <div class="sponsors__norWester--logos">
            <a href="https://www.pepsico.ca/" target="_blank">
              <?php 
                $image = get_field('sponsor_arctic_ice');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>
            </a>
          </div>

          <div class="sponsors__norWester--logos">
            <a href="https://hqfinefoods.com/" target="_blank">
              <?php 
                $image = get_field('sponsor_hq');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>
            </a>
          </div>
          
          <div class="sponsors__norWester--logos">
            <a href="https://dufresne.ca/" target="_blank">
              <?php 
                $image = get_field('sponsor_hq');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>
            </a>
          </div>
        </div>

        <div class="sponsors__banner">
          <h3>The Fur Traders</h3>
        </div>

        <div class="sponsors__furTrader container row">
          <div class="sponsors__furTrader--logos">
            <a href="#" target="_blank">
              <?php 
                $image = get_field('sponsor_wonderbrands');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>
            </a>
          </div>

          <div class="sponsors__furTrader--logos">
            <a href="https://www.mapleleaffoods.com/" target="_blank">
              <?php 
                $image = get_field('sponsors_maple_leaf');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>
            </a>
          </div>

          <div class="sponsors__furTrader--logos">
            <a href="https://www.olddutchfoods.ca/" target="_blank">
              <?php 
                $image = get_field('sponsor_old_dutch');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>
            </a>
          </div>
          <div class="sponsors__furTrader--logos">
            <a href="https://pg.ca/en-ca/" target="_blank">
              <?php 
                $image = get_field('sponsor_pg');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>
            </a>
          </div>

          <div class="sponsors__furTrader--logos">
            <a href="https://www.unilever.ca/" target="_blank">
              <?php 
                $image = get_field('sponsor_unilever');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>
            </a>
          </div>
        </div>

        <div class="sponsors__banner">
          <h3>Meal Sponsors</h3>
        </div>
        <div class="sponsors__mealSponsors container row">
          <div class="sponsors__mealSponsors--logos">
            <a href="https://corpo.metro.ca/en/home.html" target="_blank">
              <?php 
                $image = get_field('sponsor_metro');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>
            </a>
          </div>

          <div class="sponsors__mealSponsors--logos">
            <a href="https://www.sysco.ca/location/winnipeg/" target="_blank">
              <?php 
                $image = get_field('sponsor_sysco');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>
            </a>
          </div>

          <div class="sponsors__mealSponsors--logos">
            <a href="http://parmalat.ca/" target="_blank">
              <?php 
                $image = get_field('sponsor_lactalis');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>
            </a>
          </div>

          <div class="sponsors__mealSponsors--logos">
            <a href="https://wonderbrands.com/" target="_blank">
              <?php 
                $image = get_field('sponsor_wonderbrands');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['title']); ?>" />
              <?php endif; ?>
            </a>
          </div>
        </div>
      </section>