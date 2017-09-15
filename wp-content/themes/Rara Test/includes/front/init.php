<?php

//Exit if accccessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

function my_rewrite_flush() {
    // First, we "add" the custom post type via the above written function.
    // Note: "add" is written with quotes, as CPTs don't get added to the DB,
    // They are only referenced in the post_type column with a post entry, 
    // when you add a post of this CPT.
    create_post_type();

    // ATTENTION: This is *only* done during plugin activation hook in this example!
    // You should *NEVER EVER* do this on every page load!!
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );

function create_post_type() {

    // Subscribe
    $labels = array(
            'name'                       => _x('Subscribe', 'post type general name'),
            'singular_name'              => _x('Subscribe', 'post type singular name'),
            'add_new'                    => _x('Add New', 'Subscribe'),
            'add_new_item'               => __('Add new Subscribe'),
            'edit_item'                  => __('Edit Subscribe'),
            'new_item'                   => __('New Subscribe'),
            'view_item'                  => __('View Subscribe'),
            'search_items'               => __('Search Subscribe'),
            'not_found'                  =>  __('No Subscribe found'),
            'not_found_in_trash'         => __('No Subscribe found in Trash'),
            'parent_item_colon'          => ''
      );

    $args = array(
            'labels'                     => $labels,
            'public'                     => true,
            'publicly_queryable'         => true,
            'show_ui'                    => true,
            'show_in_menu'               => true,
            'menu_position'              => 5,
            'menu_icon'                  => 'dashicons-chart-area',
            'rewrite'                    => true,
            'query_var'                  => true,
            'capability_type'            => 'post',
            'has_archive'                => true,
            'hierarchical'               => false,
            '_builtin'                   => false, // It's a custom post type, not built in!
            'rewrite'                    => array(
                                            'slug'        => 'Subscribe',
                                            'with_front'  => true
                                            ),
            'show_in_nav_menus'          => false,
            'menu_position'              => 5,
            'supports'                   => array(
                                            'title',
                                            'thumbnail'
                                            ),
        );
      
      register_post_type('Subscribe',$args);
    }
    
    // Featured Images
    $labels = array(
            'name'                      => _x('Featured Images', 'post type general name'),
            'singular_name'             => _x('Featured Images', 'post type singular name'),
            'add_new'                   => _x('Add New', 'Featured Images'),
            'add_new_item'              => __('Add new Featured Images'),
            'edit_item'                 => __('Edit Featured Images'),
            'new_item'                  => __('New Featured Images'),
            'view_item'                 => __('View Featured Images'),
            'search_items'              => __('Search Featured Images'),
            'not_found'                 =>  __('No Featured Images found'),
            'not_found_in_trash'        => __('No Featured Images found in Trash'),
            'parent_item_colon'         => ''
      );

    $args = array(
            'labels'                    => $labels,
            'public'                    => true,
            'publicly_queryable'        => true,
            'show_ui'                   => true,
            'menu_icon'                 => 'dashicons-format-image',
            'rewrite'                   => true,
            'query_var'                 => true,
            'capability_type'           => 'post',
            'hierarchical'              => false,
            '_builtin'                  => false, // It's a custom post type, not built in!
            'rewrite'  => array(
                        'slug'          => 'Featured Images',
                        'with_front'    => true
                        ),
            'show_in_nav_menus'         => false,
            'menu_position'             => 10,
            'supports'  => array(
                        'title'
                        ),
      );
      
      register_post_type('Featured Images',$args);

    

   
 
?>