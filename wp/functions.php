<?php
  require_once( get_stylesheet_directory() . '/includes/customizer-settings.php' );
  require_once( get_stylesheet_directory() . '/includes/testimonials.php' );

  // Hooks
  add_action( 'wp_head', 'kng_head_styles' );

  add_action( 'after_setup_theme', 'kng_operations_setup' );

  add_filter( 'the_content' , 'kng_filter_content' );
  // End hooks

  function kng_filter_content( $content ) {

    $output =

    '<p class="text-white">' .

      $content;

    '</p>';

    return $output;
  }

  function kng_head_styles() {
    ?>
      <style media="screen">

      @font-face {
        font-family: 'kanitsemibold';
        src: url('kanit-semibold-webfont.eot');
        src: url('kanit-semibold-webfont.eot?#iefix') format('embedded-opentype'),
             url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/kanit-fontfacekit/web-fonts/kanit_semibold_macroman/kanit-semibold-webfont.woff') format('woff2'),
             url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/kanit-fontfacekit/web-fonts/kanit_semibold_macroman/kanit-semibold-webfont.woff') format('woff');
        font-weight: normal;
        font-style: normal;
      }

      @font-face {
        font-family: 'kanitregular';
        src: url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/kanit-fontfacekit/web-fonts/kanit_regular_macroman/kanit-regular-webfont.eot');
        src: url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/kanit-fontfacekit/web-fonts/kanit_regular_macroman/kanit-regular-webfont.eot?#iefix') format('embedded-opentype'),
             url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/kanit-fontfacekit/web-fonts/kanit_regular_macroman/kanit-regular-webfont.woff') format('woff');
        font-weight: normal;
        font-style: normal;
      }

      @font-face {
          font-family: 'open_sansregular';
          src: url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/open-sans-fontfacekit/web-fonts/opensans_regular_macroman/OpenSans-Regular-webfont.eot');
          src: url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/open-sans-fontfacekit/web-fonts/opensans_regular_macroman/OpenSans-Regular-webfont.eot?#iefix') format('embedded-opentype'),
               url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/open-sans-fontfacekit/web-fonts/opensans_regular_macroman/OpenSans-Regular-webfont.woff') format('woff');
          font-weight: normal;
          font-style: normal;
      }

      .special-bg {
        background-image: url( <?php echo get_stylesheet_directory_uri(); ?>/img/special-bg.jpg );
      }
      </style>
    <?php
  }

  function dwf_enqueue_resources() {
    // Enqueue styles

    wp_register_style( 'kng_bootstrap', get_stylesheet_directory_uri() . '/bootstrap-4.0/dist/css/bootstrap.min.css' );

    wp_register_style( 'kng_iconmoon', get_stylesheet_directory_uri() . '/IcoMoon-Free/style.css' );

    wp_enqueue_style( 'kng_stylesheets', get_stylesheet_directory_uri() . '/style.css', array( 'kng_bootstrap', 'kng_iconmoon',  ) );

    // Backgrounds
    $home_bg_sett = get_theme_mod( 'kng_hero_img' );

    $home_bg =
      '.s-home {
        background-image: url(' . $home_bg_sett . ');
      }';

      wp_add_inline_style( 'kng_stylesheets', $home_bg );


    $about_page_option = get_the_post_thumbnail_url( get_option( 'kng_about_pg' ), 'large' );

    $about_pg =
      '.s-about {
        background-image: url( ' . $about_page_option . ' );
      }';

    wp_add_inline_style( 'kng_stylesheets', $about_pg );


    $how_roomPg = get_option( 'features_img' );

    $showroom_bg = get_the_post_thumbnail_url( $how_roomPg, 'large' );

    $showroom_bg_css = '.s-showroom { background-image: url( ' . $showroom_bg . ' ); }';

    wp_add_inline_style( 'kng_stylesheets', $showroom_bg_css );

    // Enqueue scripts

    wp_register_script( 'kng_jquery', get_stylesheet_directory_uri() . '/js/jquery-3.2.1.js' );

    wp_register_script( 'kng_popper', get_stylesheet_directory_uri() . '/bootstrap-4.0/assets/js/vendor/popper.min.js' );

    wp_register_script( 'kng_bootstrap_scripts', get_stylesheet_directory_uri() . '/bootstrap-4.0/dist/js/bootstrap.min.js' );

    wp_enqueue_script( 'kng_scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array( 'kng_jquery', 'kng_popper' , 'kng_bootstrap_scripts') );
  }

  function kng_operations_setup() {

    register_nav_menu( 'kng_useful_links', __( 'Useful_links', 'kng' ) );

    add_post_type_support( 'page', 'excerpt' );

    // Create page dinamically
		/**
		 * Page ID or false if the option desn't exist yet
		 *
		 * @var string|boolean $about_page_option
		 */
		 $about_page_option = get_option( 'kng_about_pg' );

		  if ( false === $about_page_option || is_wp_error( $about_page_option ) ) { // if there is value

		    // In case that returns false we insert the page

		    /**
		     * Array of arguments for the page
		     *
		     * @var array $main_product_args
		     */
		      $about_page_option_args =
	          array(
	            'post_title' => 'Welcome to the king of the trucks',
	            'post_name' => 'kng-about-pg',
	            'post_content' => '',
	            'post_status' => 'publish',
	            'post_type' => 'page',
              'page_template' => 'about-template.php',
	          );

		      /**
		       * Page ID
		       *
		       * @var string $inserted_about_page
		       */
		      $inserted_about_pg = wp_insert_post( $about_page_option_args, true );

		      // we update an option with the page ID
		      update_option( 'kng_about_pg', $inserted_about_pg );
		  }

      $features_page_option = get_option( 'features_img' );

 		  if ( false === $features_page_option ) { // if there is value

 		    // In case that returns false we insert the page

 		    /**
 		     * Array of arguments for the page
 		     *
 		     * @var array $main_product_args
 		     */
 		      $features_page_args =
	          array(
	            'post_title' => 'CHECK OUT OUR FEATURED VEHICLES',
	            'post_name' => 'kng-featured-pg',
	            'post_content' => '',
	            'post_status' => 'publish',
	            'post_type' => 'page',
 		      );

 		      /**
 		       * Page ID
 		       *
 		       * @var string $inserted_about_page
 		       */
 		      $inserted_features_pg = wp_insert_post( $features_page_args, true );

 		      // we update an option with the page ID
 		      update_option( 'features_img', $inserted_features_pg );
 		  }
  }
