 <!-- FOOTER
    =================================================== -->
    <footer class="footer">
      <div class="container row">
        <div class="footer__nav">
          <div class="footer__logo">
            <a href="index.html">
            <img
                src="<?php echo get_theme_file_uri(); ?>/img/winterPartnersGathering_175x85.svg" width="175px" height="85px"
                alt="NWC Wintering Partners Gathering 2022"/>
            </a>
          </div>

          <div class="footer__menu">
            <div class="footer__nav--item footer__nav--conference">
              <h4 class="footer__menu--head">Conference</h4>
              <ul title="Conference">
                <li><a href="schedule.html">Schedule</a></li>
                <li><a href="victoria.html">Victoria Inn</a></li>
                <li><a href="city.html">in the City</a></li>
              </ul>
            </div>

            <div class="footer__nav--item footer__nav--tradeshow">
              <h4 class="footer__menu--head">Tradeshow</h4>
              <ul title="Tradeshow">
                <li><a href="sponsors.html#">Sponsors</a></li>
                <li><a href="vendors.html">Vendor List</a></li>
                <li><a href="tradeshow.html">Tradeshow Rotations</a></li>
              </ul>
            </div>

            <div class="footer__nav--item footer__nav--featureItems">
              <h4 class="footer__menu--head">Feature Items</h4>
              <ul title="Feature Items">
                <li><a href="#">Food</a></li>
                <li><a href="#">General Merchandise</a></li>
              </ul>
            </div>

            <div class="footer__nav--item footer__nav--pharmacy">
              <h4 class="footer__menu--head">Pharmacy</h4>
              <ul title="Pharmacy">
                <li><a href="pharmacy-schedule.html">Schedule</a></li>
                <li><a href="victoria.html">Victoria Inn</a></li>
                <li><a href="city.html">in the City</a></li>
              </ul>
            </div>

            <div class="footer__nav--item footer__nav--storeawards">
              <a href="awards.html"> Store Awards </a>
            </div>

            <div class="footer__nav--item footer__nav--contact">
              <a href="contact.html">Contact</a>
            </div>

            <div class="footer__nav--item btn btn__login footer__nav--login">
              <a class="btn btn__login footer__nav--login" href="#">Log-In</a>
            </div>
          </div>
          <!-- footer__menu -->
        </div>
        <!-- footer__nav -->
        <div class="footer__media">
          <div class="footer__media--copy">
            <p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?></p>
          </div>
          <div class="footer__media--links">
            <a href="https://www.northwest.ca/legal-privacy" target="_blank">Legal / Privacy</a>
            <a href="https://www.northwest.ca/terms-and-conditions" target="_blank">Terms & Conditions</a>
            <a href="<?php echo esc_url(site_url( '/contact' ) ); ?>">Contact</a>
          </div>
          <div class="footer__media--social">
            <a class="facebook" href="#" target="_blank">
              <img
                src="<?php echo get_theme_file_uri(); ?>/img/facebook.svg" width="25px" height="25px"
                alt="Facebook"/>
            </a>

          </div>
        </div>
      </div>
      <!-- container row -->
    </footer>
    <!-- footer -->
    <!-- ============================================== -->

    <?php wp_footer(); ?>
  </body>
</html>