<?php
  get_header();
?>

    <section class="s-home grid-wrp align-items-center h-100vh background-no-repeat-cover bg-dark-layer">
      <h1 class="text-center text-white font-uppercase mt-5 pt-5">
        <?php
          $main_title = get_theme_mod( 'kng_hero_txt' );

            if ( $main_title ) {

              $main_title_token = esc_html( strtok( $main_title, ' ' ) );

              $main_title_token_count = strlen( $main_title_token );

              $main_title_rest = substr( $main_title, $main_title_token_count );

                echo $main_title_token .

                '<p class="font-bold">' .

                  trim( $main_title_rest ) .

                '</p>';

            } else {
              echo 'Welcome to
              <p class="font-bold">the king of trucks</p>';
            }
        ?>
      </h1>
    </section>

    <section class="special-bg bg-light-layer background-no-repeat-cover">
      <div class="pt-5">
        <h1 class="text-center font-uppercase pt-4">
          <?php

          $cta_text = esc_html( get_theme_mod( 'kng_cta_txt' ) );

            if ( $cta_text ) {

              $cta_text_token = strtok( $cta_text, ' ' ) . ' ';

              $cta_text_token_count = strlen( $cta_text_token );

              $cta_text_rest = substr( $cta_text, $cta_text_token_count );

              echo '<span class="font-bold">' . $cta_text_token . '</span>' .

              trim( $cta_text_rest );

            } else { ?>

              <span class="font-bold">Used trucks sale</span> in Miami

            <?php } ?>
        </h1>

        <p class="text-center w-100 mt-2 mb-5 pb-5">
          <a href="#" class="btn btn-primary rounded-0 ml-2 pr-4 pl-4 font-uppercase" role="button">Inventory</a>
          <a href="#" class="btn btn-dark rounded-0 ml-2 pr-4 pl-4 font-uppercase" role="button">Financing</a>
        </p>
      </div>
    </section>

    <section class="s-features grid-wrp container mt-5 pt-5">
      <div class="row mt-5 text-center position-relative">

        <div class="col-10 col-md-8 ml-auto mr-auto col-lg-4 position-relative grid-wrp h-min-content">
          <article class="box-shadow s-features__1st">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/features-thumb.jpeg" class="mw-100" alt="">

            <h3 class="text-primary features-text font-grow mt-4 pr-4 pl-4 pt-1">
              <span class="font-bold">BROWSE</span> INVENTORY
            </h3>

            <p class="pr-4 pl-4">
              With thousands of trucks at our dealership in Miami, we’re sure to have what you’re looking for. Take a look around and let us know if you have any questions.
            </p>
          </article>
        </div>

        <div class="col-10 col-md-8 ml-auto mr-auto col-lg-4 position-relative grid-wrp h-min-content mt-5 mt-lg-0">
          <article class="box-shadow s-features__2nd">

            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/features-thumb.jpeg" class="mw-100" alt="">

            <h3 class="text-primary features-text font-grow mt-4 pr-4 pl-4 pt-1">
              <span class="font-bold">BROWSE</span> INVENTORY
            </h3>

            <p class="pr-4 pl-4">
              With thousands of trucks at our dealership in Miami, we’re sure to have what you’re looking for. Take a look around and let us know if you have any questions.
            </p>
          </article>
        </div>

        <div class="col-10 col-md-8 ml-auto mr-auto col-lg-4 position-relative grid-wrp h-min-content mt-5 mt-lg-0">
          <article class="box-shadow s-features__3rd">

            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/features-thumb.jpeg" class="mw-100" alt="">

            <h3 class="text-primary features-text font-grow mt-4 pr-4 pl-4 pt-1">
              <span class="font-bold">BROWSE</span> INVENTORY
            </h3>

            <p class="pr-4 pl-4">
              With thousands of trucks at our dealership in Miami, we’re sure to have what you’re looking for. Take a look around and let us know if you have any questions.
            </p>

          </article>
        </div>
      </div>
    </section>

    <section class="container-fluid s-about grid-wrp bg-dark-layer background-no-repeat-cover align-items-center container-mg-t">
      <div class="row">
        <header class="col-md-8 mr-auto mr-xl-0 col-xl-auto ml-auto s-about__header mt-5 pr-4 grid-wrp align-items-center">
          <h2 class="text-white text-center text-xl-right border border-white border-bottom-0 border-top-0 border-left-0 pr-5 s-about__title">

            <?php
              $kng_about_pgID = get_option( 'kng_about_pg' );

              if ( get_the_title( $kng_about_pgID ) ) {

                $title_about = esc_html( get_the_title( $kng_about_pgID ) );

                $title_about_token = strtok( $title_about, ' ' );

                $title_about_token_count = strlen( $title_about_token );

                $title_about_rest = substr( $title_about, $title_about_token_count );

                echo $title_about_token .

                '<p class="font-bold">' .

                  trim( $title_about_rest ) .

                '</p>';

              } else {

                echo __( 'Welcome to', 'kng' ) .

                '<p class="font-bold">
                  the king of trucks
                </p>';

              }
            ?>
          </h2>
        </header>

        <div class="col-10 col-md-9 col-xl-5 ml-auto ml-xl-0 mr-auto s-about__description pt-3 pt-xl-5 mt-2 mt-xl-5 mb-3">

        <?php
          if ( apply_filters( 'the_content', get_post( $kng_about_pgID )->post_content ) ) {

              echo apply_filters( 'the_content', kng_filter_content( get_post( $kng_about_pgID )->post_content ) );

          } else { ?>

            <p class="text-white">
              <?php
                _e( "The King of Credit is your local source for affordable, quality used trucks in Miami, Florida. You'll take great comfort in knowing that all our trucks go through a complete inspection before they are ready for sale. We have years of experience in the car sales industry and are eager to help you choose your next truck.

                If you have a vehicle to sell, we'll buy it! Yes, we'll buy your vehicle from you and you don't have to buy anything from us. Bring the vehicle in so we can have a look and make you a fair offer. Our customers are #1 at The King of Trucks. Each and every customer has always been our top priority and receive the most attention and respect when shopping for a truck here at The King of Trucks. Visit our dealership in Miami today to find the perfect truck for you at an affordable price!", 'kng' );
              ?>
            </p>

          <?php }

          ?>

          <a href="#" class="btn btn-primary rounded-0 font-uppercase p-3 mb-5" role="button">
            <?php _e( 'View full inventory', 'kng' ); ?>

            <span class="icon icon-arrow-right2 icon-arrow-size d-inline-block ml-2"></span>
          </a>
        </div>
      </div>
    </section>

    <section class="s-services container-fluid mt-5">
      <div class="row">
        <div class="col-7 ml-auto mr-auto col-lg-6 col-xl-3 pl-lg-5 pr-lg-4">
          <p class="text-primary text-center text-lg-right text-xl-left clearfix">
            <span class="d-inline-block">
              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    	 width="78.3px" height="79px" viewBox="0 0 78.3 79" enable-background="new 0 0 78.3 79" xml:space="preserve">
                <use xlink:href="#car_icon"></use>
              </svg>
            </span>

            <span class="d-inline-block border border-primary border-bottom-0 border-top-0 border-right-0 pl-2 ml-2 mb-3 font-uppercase">
              <?php

                $title_1st_feat = esc_html( get_theme_mod( 'kng_features_txt1_tit' ) );

                if ( $title_1st_feat ) {

                  $title_1st_feat_tok = strtok( $title_1st_feat, ' ' );

                  $title_1st_feat_tok_count = strlen( $title_1st_feat_tok );

                  $title_1st_feat_rest = substr( $title_1st_feat , $title_1st_feat_tok_count );

                  echo '<span class="ml-1">' .

                    $title_1st_feat_tok .

                  '</span>' .

                  '<span class="font-bold d-block ml-1">' .

                  $title_1st_feat_rest .

                  '</span>';

                } else {

                  echo
                    '<span class="ml-1">USED</span>
                    <span class="font-bold d-block ml-1">
                      TRUCK SALES
                    </span>';
                }

              ?>
            </span>

            <span class="text-dark float-left">
              <?php

                $txt_feature_1 = get_theme_mod( 'kng_features_txt1' );

                if ( $txt_feature_1 ) {

                  echo esc_html( $txt_feature_1 );

                } else {

                  echo 'We buy and sell quality used trucks at our dealership in Miami. Shop from hundreds of truck makes and models, all in one place.';

                }

              ?>
            </span>
          </p>
        </div>

        <div class="col-7 ml-auto mr-auto col-lg-6 col-xl-3 pr-lg-5 mt-5 mt-lg-0">
          <p class="text-primary text-center text-lg-left clearfix">
            <span class="d-inline-block">
              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="78.3px" height="79px" viewBox="0 0 78.3 79" enable-background="new 0 0 78.3 79" xml:space="preserve">
                <use xlink:href="#hands_icon"></use>
              </svg>
            </span>

            <span class="d-inline-block border border-primary border-bottom-0 border-top-0 border-right-0 pl-2 ml-2 mb-3 font-uppercase">

            <?php
              $title_2nd_feat = esc_html( get_theme_mod( 'kng_features_txt2_tit' ) );

              if ( $title_2nd_feat ) {

                $title_2nd_feat_tok = strtok( $title_2nd_feat, ' ' );

                $title_2nd_feat_tok_count = strlen( $title_2nd_feat_tok );

                $title_2nd_feat_rest = substr( $title_2nd_feat , $title_2nd_feat_tok_count );

                echo '<span class="ml-1">' .

                  $title_2nd_feat_tok .

                '</span>' .

                '<span class="font-bold d-block ml-1">' .

                $title_2nd_feat_rest .

                '</span>';

              } else {

                  echo '<span class="ml-1">BUY HERE</span>
                  <span class="font-bold d-block ml-1">
                    PAY HERE
                  </span>';
                }

              ?>
            </span>

            <span class="text-dark float-left">

              <?php
                $txt_feature_2 = get_theme_mod( 'kng_features_txt2' );

                if ( $txt_feature_2 ) {

                  echo esc_html( $txt_feature_2 );

                } else {

                  _e( 'No credit or bad credit? No problem. We offer buy here, pay here options for customers with low credit scores.', 'kng' );

                }

              ?>

            </span>
          </p>
        </div>

        <div class="col-7 ml-auto mr-auto col-lg-6 col-xl-3 pr-md-4 pr-xl-5 mt-5 mt-lg-0">
          <p class="text-primary text-center text-lg-right text-xl-left clearfix">
            <span class="d-inline-block">
              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="78.3px" height="79px" viewBox="0 0 78.3 79" enable-background="new 0 0 78.3 79" xml:space="preserve">
                <use xlink:href="#price_icon"></use>
              </svg>
            </span>

            <span class="d-inline-block border border-primary border-bottom-0 border-top-0 border-right-0 pl-2 ml-2 mb-3 font-uppercase">
              <?php

                $title_3rd_feat = esc_html( get_theme_mod( 'kng_features_txt3_tit' ) );

                if ( $title_3rd_feat ) {

                  $title_3rd_feat_tok = strtok( $title_3rd_feat, ' ' );

                  $title_3rd_feat_tok_count = strlen( $title_3rd_feat_tok );

                  $title_3rd_feat_rest = substr( $title_3rd_feat , $title_3rd_feat_tok_count );

                  echo '<span class="ml-1">' .

                    $title_3rd_feat_tok .

                  '</span>' .

                  '<span class="font-bold d-block ml-1">' .

                  $title_3rd_feat_rest .

                  '</span>';

                } else {

                    echo '<span class="ml-1">AFFORDABLE</span>
                    <span class="font-bold d-block ml-1">
                      PRICES
                    </span>';

                }

              ?>
            </span>

            <span class="text-dark float-left">
              <?php
                $txt_feature_3 = get_theme_mod( 'kng_features_txt3' );

                if ( $txt_feature_3 ) {

                  echo esc_html( $txt_feature_3 );

                } else {

                  _e( 'At The King of Trucks, our prices are always affordable. We understand purchasing a used truck at a fair price is what you need.', 'kng' );
                }
              ?>

            </span>
          </p>
        </div>

        <div class="col-7 ml-auto mr-auto col-lg-6 col-xl-3 pr-lg-5 mt-5 mt-lg-0">
          <p class="text-primary text-center text-lg-left clearfix">
            <span class="d-inline-block">
              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="78.3px" height="79px" viewBox="0 0 78.3 79" enable-background="new 0 0 78.3 79" xml:space="preserve">
                <use xlink:href="#car2_icon"></use>
              </svg>
            </span>

            <span class="d-inline-block border border-primary border-bottom-0 border-top-0 border-right-0 pl-2 ml-2 mb-3 font-uppercase">
              <?php
              $title_4th_feat = esc_html( get_theme_mod( 'kng_features_txt4_tit' ) );

              if ( $title_4th_feat ) {

                $title_4th_feat_tok = strtok( $title_4th_feat, ' ' );

                $title_4th_feat_tok_count = strlen( $title_4th_feat_tok );

                $title_4th_feat_rest = substr( $title_4th_feat , $title_4th_feat_tok_count );

                echo '<span class="ml-1">' .

                  $title_4th_feat_tok .

                '</span>' .

                '<span class="font-bold d-block ml-1">' .

                $title_4th_feat_rest .

                '</span>';

              } else {
                  echo '<span class="ml-1">VEHICLE</span>
                  <span class="font-bold d-block ml-1">
                    TRADE-IN
                  </span>';
                }
              ?>

            </span>

            <span class="text-dark float-left">

              <?php
                $txt_feature_4 = get_theme_mod( 'kng_features_txt4' );

                if ( $txt_feature_4 ) {

                  echo esc_html( $txt_feature_4 );

                } else {

                    _e( 'If you want to trade-in your vehicle for a truck, we will appraise your vehicle for the best trade-in value.', 'kng' );
                }
               ?>

            </span>
          </p>
        </div>
      </div>
    </section>

    <section class="container-fluid grid-wrp s-showroom bg-dark-layer background-no-repeat-cover mt-5">
      <div class="row pt-5 mt-5 align-items-center">
        <div class="col-9 col-md-4 col-lg-3 ml-auto mr-auto">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/thumb.jpeg" class="mw-100 box-shadow pb-5" alt="">
        </div>

        <div class="col-10 col-md-5 ml-auto mr-auto border border-white border-top-0 border-bottom-0 border-right-0 pl-md-5 s-showroom__title text-center text-md-left">

          <?php
            $featured_img_pg = get_option( 'features_img' );
          ?>

          <h2 class="text-white mb-2">

            <?php
              $featured_tit = get_the_title( $featured_img_pg );

              if ( $featured_tit ) {

                  $featured_tit = esc_html( $featured_tit );

                  $featured_tit_token = strtok( $featured_tit, ' ' );

                  $featured_tit_token_count = strlen( $featured_tit_token );

                  $featured_tit_rest = substr( $featured_tit , $featured_tit_token_count );


                  echo $featured_tit_token .

                  '<span class="font-bold d-block">' .

                    trim( $featured_tit_rest ) .

                  '<span>';

              } else { ?>

                  CHECK OUT OUR
                  <span class="font-bold d-block">
                    FEATURED VEHICLES
                  </span>

                <?php
              }
            ?>
          </h2>

          <a href="#" class="btn btn-primary rounded-0 font-uppercase p-3 mb-5" role="button">

            View full inventory

              <span class="icon icon-arrow-right2 icon-arrow-size d-inline-block ml-2"></span>
          </a>
        </div>
      </div>
    </section>

    <section class="container-fluid s-testimonial">
      <div class="row">

        <!-- <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
width="64.8px" height="54.8px" viewBox="0 0 64.8 54.8" enable-background="new 0 0 64.8 54.8" xml:space="preserve" >
          <use xlink:href="#quote_up"></use>
        </svg> -->



          <div class="col-12 col-lg-4 ml-auto mr-auto mr-lg-0 grid-wrp align-items-center pl-5 pr-5 pt-5">
            <h2 class="font-uppercase text-center text-lg-right mt-5">
              <?php

                $testimonial_txt = get_theme_mod( 'kng_txt_testimonial' );

                if ( $testimonial_txt ) {

                  echo esc_html( $testimonial_txt );

                } else {
                  echo 'WHAT REAL CUSTOMERS ARE SAYING' .

                  '<span class="font-bold text-primary">GOOGLE REVIEWS</span>';
                }

              ?>

            </h2>
          </div>

          <div class="col-10 col-lg-4 ml-auto ml-lg-0 mr-auto mt-lg-5 pt-3 clearfix">

            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="64.8px" height="54.8px" viewBox="0 0 64.8 54.8" enable-background="new 0 0 64.8 54.8" xml:space="preserve" class="s-testimonial__quoteUp">
              <use xlink:href="#quote_up"></use>
            </svg>

            <div class="carousel slide border border-primary p-4 pl-5 pr-5 pt-5 rounded box-shadow" id="carousel_testimonial" data-interval="2500">
              <ol class="carousel-indicators d-none">
                <li data-target="#carousel_testimonial" data-slide-to="0" class="active ml-4 cursor-pointer"></li>
                <li data-target="#carousel_testimonial" data-slide-to="1" class="ml-4 cursor-pointer"></li>
                <li data-target="#carousel_testimonial" data-slide-to="2" class="ml-4 cursor-pointer"></li>
              </ol>

              <div class="carousel-inner">
                <?php
                  $args =
                    array(
                        'post_type' => 'kng_testimonies',
                    );

                  $testimonies_query = new WP_Query( $args );

                  if( $testimonies_query->have_posts() ) {

                    $counter = 1;

                    while ( $testimonies_query->have_posts() ) {
                      $testimonies_query->the_post();
                      ?>

                      <div class="carousel-item <?php echo $counter === 1 ? 'active' : ''; ?>">

                        <?php the_content(); ?>

                        <span class="text-primary font-bold d-block">
                          <?php
                            echo esc_html( get_the_title() );
                          ?>
                        </span>
                      </div>
                      <?php

                      $counter++;
                    }
                  } else {
                    /* No posts found */
                  }
                ?>

              </div>
            </div>

            <div class="d-flex justify-content-center w-100 ml-1 ml-md-4 ml-lg-5">
              <a class="carousel-control-prev carousel-control--fix d-lg-none" href="#carousel_testimonial" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
             </a>

             <a class="carousel-control-next carousel-control--fix d-lg-none" href="#carousel_testimonial" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
             </a>
            </div>

            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="62.7px" height="53px" viewBox="0 0 62.7 53" enable-background="new 0 0 62.7 53" xml:space="preserve" class="float-right quote-down d-none d-sm-block">

              <use xlink:href="#quote_down"></use>

           </svg>
          </div>
      </div>
    </section>

  <?php get_footer(); ?>
