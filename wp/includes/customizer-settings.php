<?php
  add_action( 'customize_register', 'dwf_customizer_settings' );

  // Enqueue scripts for live preview
  // add_action( 'customize_preview_init', 'fes_customizer_enqueue_scripts' );

  function dwf_customizer_settings( $wp_customize ) {

    $wp_customize->add_setting(
      'kng_hero_img',
      array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Image_Control(
        $wp_customize, 'kng_hero_img_control',
        array(
          'label' => esc_html__( 'Hero image', 'kng' ),
          'description' => __( 'Insert an image for your hero image section', 'kng' ),
          'section' => 'static_front_page',
          'settings' => 'kng_hero_img',
        )
      )
    );

    $wp_customize->add_setting(
      'kng_hero_txt',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'kng_hero_txt_control',
        array(
          'label' => esc_html__( 'Main text for the home page', 'kng' ),
          // 'description' => __( 'Write a text for the ', 'kng' ),
          'section' => 'static_front_page',
          'settings' => 'kng_hero_txt',
        )
      )
    );

    $wp_customize->add_setting(
      'kng_cta_txt',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'kng_cta_txt_control',
        array(
          'label' => esc_html__( 'Text for the "call to action" section, this is the second section', 'kng' ),
          // 'description' => __( 'Write a text for the ', 'kng' ),
          'section' => 'static_front_page',
          'settings' => 'kng_cta_txt',
        )
      )
    );

    $wp_customize->add_setting(
      'kng_features_txt1_tit',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'kng_features_txt1_tit_control',
        array(
          'label' => esc_html__( 'Text title for the 1st feature you offer', 'kng' ),
          'description' => esc_html__( 'These settings are meant for the features section', 'kng' ),
          'section' => 'static_front_page',
          'settings' => 'kng_features_txt1_tit',
        )
      )
    );

    $wp_customize->add_setting(
      'kng_features_txt2_tit',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'kng_features_txt2_tit_control',
        array(
          'label' => esc_html__( 'Text title for the 2nd feature you offer', 'kng' ),
          'section' => 'static_front_page',
          'settings' => 'kng_features_txt2_tit',
        )
      )
    );

    $wp_customize->add_setting(
      'kng_features_txt3_tit',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'kng_features_txt3_tit_control',
        array(
          'label' => esc_html__( 'Text title for the 3rd feature you offer', 'kng' ),
          'section' => 'static_front_page',
          'settings' => 'kng_features_txt3_tit',
        )
      )
    );

    $wp_customize->add_setting(
      'kng_features_txt4_tit',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'kng_features_txt4_tit_control',
        array(
          'label' => esc_html__( 'Text title for the 4th feature you offer', 'kng' ),
          'section' => 'static_front_page',
          'settings' => 'kng_features_txt4_tit',
        )
      )
    );

    $wp_customize->add_setting(
      'kng_features_txt1',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'kng_features_txt1_control',
        array(
          'label' => esc_html__( 'Text for the 1st feature you offer', 'kng' ),
          'description' => esc_html__( 'These settings are meant for the features section', 'kng' ),
          'section' => 'static_front_page',
          'settings' => 'kng_features_txt1',
        )
      )
    );

    $wp_customize->add_setting(
      'kng_features_txt2',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'kng_features_txt2_control',
        array(
          'label' => esc_html__( 'Text for the 2nd feature you offer', 'kng' ),
          'section' => 'static_front_page',
          'settings' => 'kng_features_txt2',
        )
      )
    );

    $wp_customize->add_setting(
      'kng_features_txt3',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'kng_features_txt3_control',
        array(
          'label' => esc_html__( 'Text for the 3rd feature you offer', 'kng' ),
          'section' => 'static_front_page',
          'settings' => 'kng_features_txt3',
        )
      )
    );

    $wp_customize->add_setting(
      'kng_features_txt4',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'kng_features_txt4_control',
        array(
          'label' => esc_html__( 'Text for the 4th feature you offer', 'kng' ),
          'section' => 'static_front_page',
          'settings' => 'kng_features_txt4',
        )
      )
    );

    $wp_customize->add_setting(
      'kng_txt_testimonial',
      array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize, 'kng_txt_testimonial_control',
        array(
          'label' => esc_html__( 'Testimonial section title', 'kng' ),
          'section' => 'static_front_page',
          'settings' => 'kng_txt_testimonial',
        )
      )
    );

  }
