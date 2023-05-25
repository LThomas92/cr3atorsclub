<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package cr3atorsclub
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function cr3atorsclub_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'cr3atorsclub_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function cr3atorsclub_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'cr3atorsclub_pingback_header' );

//Custom Post Types (CPT)

function custom_post_type() {

	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Cr3ators', 'Post Type General Name' ),
			'singular_name'       => _x( 'cr3ators', 'Post Type Singular Name'),
			'menu_name'           => __( 'Cr3ators'),
			'parent_item_colon'   => __( 'Parent Cr3ator'),
			'all_items'           => __( 'All Cr3ators' ),
			'view_item'           => __( 'View Cr3ator' ),
			'add_new_item'        => __( 'Add New Cr3ator' ),
			'add_new'             => __( 'Add New' ),
			'edit_item'           => __( 'Edit Cr3ator' ),
			'update_item'         => __( 'Update Cr3ator' ),
			'search_items'        => __( 'Search Cr3ators' ),
			'not_found'           => __( 'Not Found' ),
			'not_found_in_trash'  => __( 'Not found in Trash' ),
		);

	// Set other options for Custom Post Type

		$args = array(
			'label'               => __( 'cr3ators'),
			'description'         => __( 'cr3ators'),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			'taxonomies'          => array( 'category', 'post_tag' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_icon'           => 'dashicons-groups',
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => false,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => true,

		);

		// Registering your Custom Post Type
		register_post_type( 'cr3ators', $args );
	}

	add_action( 'init', 'custom_post_type', 0 );

  //Podcast CPT

  function custom_post_type_1() {

    // Set UI labels for Custom Post Type
      $labels = array(
        'name'                => _x( 'Podcasts', 'Post Type General Name' ),
        'singular_name'       => _x( 'podcasts', 'Post Type Singular Name'),
        'menu_name'           => __( 'Podcasts'),
        'parent_item_colon'   => __( 'Parent Podcast'),
        'all_items'           => __( 'All Podcasts' ),
        'view_item'           => __( 'View Podcast' ),
        'add_new_item'        => __( 'Add New Podcast' ),
        'add_new'             => __( 'Add New' ),
        'edit_item'           => __( 'Edit Podcast' ),
        'update_item'         => __( 'Update Podcast' ),
        'search_items'        => __( 'Search Podcasts' ),
        'not_found'           => __( 'Not Found' ),
        'not_found_in_trash'  => __( 'Not found in Trash' ),
      );
  
    // Set other options for Custom Post Type
  
      $args = array(
        'label'               => __( 'Podcasts'),
        'description'         => __( 'Podcasts'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'category', 'post_tag' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon'           => 'dashicons-microphone',
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
  
      );
  
      // Registering your Custom Post Type
      register_post_type( 'podcasts', $args );
    }
  
    add_action( 'init', 'custom_post_type_1', 0 );