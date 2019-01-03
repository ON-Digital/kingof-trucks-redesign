<?php
  // function create_testimonial_taxonomy()
  // {
    /**
     * Custom labels for our new 'tag_gallery' taxonomy
     *
     * @var array $labels_tag_taxonomy
     */
    // $labels_tag_taxonomy = array(
    //   'name' => _X( 'Authors testimonies', 'taxonomy general name', 'kng' ),
    //   'singular_name' => _X( 'Author testimony', 'taxonomy singular name', 'kng' ),
    //   'search_items' => __( 'Search authors testimonies', 'kng' ),
    //   'popular_items' => __( 'Popular authors testimonies', 'kng' ),
    //   'all_items' => __( 'All authors testimonies', 'kng' ),
    //   'edit_item' => __( 'Edit author testimony', 'kng' ),
    //   'update_item' => __( 'Update author testimony', 'kng' ),
    //   'not_found' => __( 'No author testimony found', 'kng' ),
    //   'not_found_in_trash' => __( 'No author testimony found in trash', 'kng' ),
    //   'add_new_item' => __( 'Add new author testimony', 'kng' ),
    //   'new_item_name' => __( 'New author testimony name', 'kng' ),
    //   'menu_name' => __( 'Authors testimonies', 'kng' ),
    // );

     /**
      * Array arguments for our new 'tag_gallery' taxonomy
      *
      * @var array $args_taxonomies
      */
     // $args_taxonomies =  array(
     //      'labels' => $labels_tag_taxonomy,
     //      'hierarchical' => false,
     //      'description' => __( 'Classify your testimonies by author', 'kng' ),
     //      'rewrite' => array( 'slug' => 'authors-testimonies', 'with_front' => false ),
     //      'update_count_callback' => '_update_post_term_count'
     //  );


    // register_taxonomy( 'authors_testimonies', 'kng_testimonies', $args_taxonomies );

    // Connect custom taxonomy with object type.
    // Codex recommendation ( https://codex.wordpress.org/Function_Reference/register_taxonomy_for_object_type )
    // register_taxonomy_for_object_type( 'authors_testimonies', 'kng_testimonies' );
  // }

  // add_action( 'init', 'create_testimonial_taxonomy' );

  function create_testimonial_postype() {

    /**
        * Labels collection for the 'labels' argument
        *
        * @var array $labels
        */
       $labels = array(
           'name' => __( 'Testimonies', 'kng' ),
           'singular_name' => __( 'Testimony', 'kng' ),
           'add_new' => __( 'Add new testimony', 'kng' ),
           'add_new_item' => __( 'Add new testimony', 'kng' ),
           'edit' => __( 'Edit', 'kng' ),
           'edit_item' => __( 'Edit testimony', 'kng' ),
           'new_item' => __( 'New testimony', 'kng' ),
           'view' => __( 'View testimony', 'kng' ),
           'view_item' => __( 'View testimony', 'kng' ),
           'search items' => __( 'Search testimonies', 'kng' ),
           'not_found' => __( 'No testimonies found', 'kng' ),
           'not_found_in_trash' => __( 'No testimonies in the trash', 'kng' ),
       );

       /**
        * Arguments for the 'register_post_type' function
        *
        * @var array $args
        */
       $args = array(
           'labels' => $labels,
           'hierarchical' => false,
           'description' => __( 'Display customers testimony' , 'kng' ),
           'public' => true,
           'menu_position' => 20,
           'menu_icon' => 'dashicons-format-gallery',
           'has_archive' => 'kng_testimonies',
           'rewrite_rules' => array( 'slug' => 'kng_testimonies', 'with_front' => false ),
           'supports' => array( 'title', 'editor',  'thumbnail' ),
       );

       register_post_type( 'kng_testimonies', $args );
     }

  add_action( 'init', 'create_testimonial_postype' );
