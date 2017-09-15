<?php

function rara_test_enqueue() {
    wp_register_style ('rara_test_font-awesome' , get_template_directory_uri() . '/assets/css/font-awesome.css');
    wp_register_style ('rara_test_jquery' , get_template_directory_uri() . '/assets/css/jquery.mmenu.all.css');
    wp_register_style ('rara_test_responsive' , get_template_directory_uri() . '/assets/css/responsive.css');

    wp_enqueue_style ('rara_test_font-awesome');
    wp_enqueue_style ('rara_test_jquery');
    wp_enqueue_style ('rara_test_responsive');


    wp_register_script ('rara_test_custom' ,  get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '', true);
    wp_register_script ('rara_test_jqueryjs' ,  get_template_directory_uri() . '/assets/js/jquery.js', array('jquery'), '', true);
    wp_register_script ('rara_test_jquery.mmenu' ,  get_template_directory_uri() . '/assets/js/jquery.mmenu.all.min.js', array('jquery'), '', true);
    
    wp_enqueue_script( 'rara_test_custom' );
    wp_enqueue_script( 'rara_test_jqueryjs' );
    wp_enqueue_script( 'rara_test_jquery.mmenu');
   
}
?>