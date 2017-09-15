<?php 

    // Register Nav Walker class_alias
    require_once('wp_bootstrap_navwalker.php');

    // Setup
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support('html5', array('search-form'));
    
    // Post Formats
    add_theme_support('post-formats', array('aside', 'gallery', 'video', 'image', 'audio', 'status', 'link', 'chat'));

    // Includes
    include(get_template_directory() . '/includes/front/enqueue.php');
    include(get_template_directory() . '/includes/front/init.php' );
    include(get_template_directory() . '/includes/setup.php');
    include(get_template_directory() . '/includes/widgets.php');
    include(get_template_directory() . '/includes/customizer.php');

    // Action and Filter Hooks
    add_action('wp_enqueue_scripts', 'rara_test_enqueue');
    add_action('after_setup_theme', 'rara_test_setup_theme');
    add_action('widgets_init', 'rara_init_widgets');
    add_action('init', 'create_post_type');

    
    // Excerpt Length Control
    function set_excerpt_length(){
        return 40;
    }

    add_filter('excerpt_length', 'set_excerpt_length');


?>