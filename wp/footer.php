<footer class="bg-dark mt-5 footer">
      <div class="container">
        <div class="row justify-items-center pt-5 footer-items-opaque">
          <div class="col-md-4 col-lg-3 ml-auto mr-auto text-center mb-3 mb-md-0">

            <h3 class="footer__title">About</h3>

            <p class="">
              <?php

                $about_pg_id = get_option( 'kng_about_pg' );

                  if ( $about_pg_id ) {

                    echo get_the_excerpt( $about_pg_id );

                  } else {
                    _e( 'The King of Trucks is your local source for affordable, quality used trucks in Miami, Florida. We buy vehicles, sell trucks, accept trade-ins, and offer financing all in one place.', 'kng' );
                  }
               ?>
            </p>
          </div>

          <div class="col-md-4 col-lg-3 ml-auto mr-auto text-center mb-3 mb-md-0">
            <h3 class="footer__title">Navigation</h3>

            <?php
              $args =
                array(
                  'theme_location' => 'dwf_footer_menu',
                  'menu_class' => 'list-unstyled',
                  'container' => false,
                  'echo' => '0',
                );

              $footer_menu = wp_nav_menu( $args );

              if ( $footer_menu ) {

                echo $footer_menu;

            } else {
              ?>
              <ul class="list-unstyled">
                <li>
                  <a href="#" class="">Home</a>
                </li>
                <li>
                  <a href="#" class="">Inventory</a>
                </li>
                <li>
                  <a href="#" class="">Financing</a>
                </li>
                <li>
                  <a href="#" class="">Truck finder</a>
                </li>
                <li>
                  <a href="#" class="">Contact us</a>
                </li>
              </ul>

          <?php
          }
            ?>
          </div>

          <div class="col-md-4 col-lg-3 ml-auto mr-auto text-center mb-3 mb-md-0">

            <h3 class="footer__title">Useful links</h3>

              <?php
                // $args =
                //   array(
                //     'theme_location' => 'kng_useful_links',
                //     'menu_class' => 'list-unstyled',
                //     'container' => false,
                //     'echo' => '0',
                //   );

                $args[ 'theme_location' ] = 'kng_useful_links';

                $useful_links = wp_nav_menu( $args );

                if ( $useful_links ) {

                  echo $useful_links;

                } else {
                  ?>

                  <ul class="list-unstyled">
                    <li>
                      <a href="#" class="">Dealer login</a>
                    </li>
                    <li>
                      <a href="#" class="">Hours and directions</a>
                    </li>
                    <li>
                      <a href="#" class="">About us</a>
                    </li>
                    <li>
                      <a href="#" class="">Trade-in value</a>
                    </li>
                    <li>
                      <a href="#" class="">Payment calculator</a>
                    </li>
                  </ul>

                  <?php
                }
              ?>
          </div>

          <div class="col-7 col-lg-3 ml-auto mr-auto text-center">
            <span class="d-inline-block">
              <h3 class="font-bold pl-3 ml-2 footer__title">Follow us</h3>
              <!-- <span class="border border-white p-2 ml-3 rounded-circle"> -->
                <span class="icon icon-facebook ml-1 pl-1 pr-1"></span>
              <!-- </span> -->

              <!-- <span class="border border-white p-2 ml-2 rounded-circle"> -->
                <span class="icon icon-youtube pl-1 pr-1"></span>
              <!-- </span> -->

              <!-- <span class="border border-white p-2 ml-2 rounded-circle"> -->
                <span class="icon icon-instagram pl-1 pr-1"></span>
              <!-- </span> -->

              <!-- <span class="border border-white p-2 ml-2 rounded-circle"> -->
                <span class="icon icon-google pl-1 pr-1"></span>

              <!-- </span> -->
            </span>

            <p class="text-white w-100 mt-4">
              <span class="icon icon-location"></span>
              2990 NW 27th Avenue Miami, FL 33142

              <span class="span icon icon-phone ml-3"></span>
              (305) 637-4110
            </p>
          </div>
        </div>

        <div class="row mt-2 text-center">
          <!-- <p class="text-white w-100">
            <span class="icon icon-location"></span>
            2990 NW 27th Avenue Miami, FL 33142

            <span class="span icon icon-phone ml-3"></span>
            (305) 637-4110
          </p> -->

          <p class="w-100 text-white copyright-text border border-secondary border-left-0 border-right-0 border-bottom-0 pt-2">
            Copyright All rights reserved. The King of Trucks © 2018 Neocami
          </p>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
  </html>
