<?php 

    function rara_init_widgets($id){
        register_sidebar(array(
            'name'          => 'Sidebar',
            'id'            => 'sidebar',
            'before_widget' => '<section class="widget">',
            'after_widget' => '</section>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
        ));

        register_sidebar(array(
            'name'          => 'Stay In Touch',
            'id'            => 'stayintouch',
            'before_widget' => '<section class="widget">',
            'after_widget' => '</section>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
        ));

        register_sidebar(array(
            'name'          => 'About Author',
            'id'            => 'aboutauthor',
            'before_widget' => '<section class="widget">',
            'after_widget' => '</section>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
        ));

        register_sidebar(array(
            'name'          => 'Newsletter',
            'id'            => 'newsletter',
            'before_widget' => '<section class="widget">',
            'after_widget' => '</section>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
        ));

        register_sidebar(array(
            'name'          => 'Advertisement',
            'id'            => 'advertisement',
            'before_widget' => '<section class="widget">',
            'after_widget' => '</section>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
        ));

        register_sidebar(array(
            'name'          => 'Instagram',
            'id'            => 'instagram',
            'before_widget' => '<section class="widget">',
            'after_widget' => '</section>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
        ));

        register_sidebar(array(
            'name'          => 'Instagram',
            'id'            => 'instagram',
            'before_widget' => '<section class="widget">',
            'after_widget' => '</section>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
        ));

        register_sidebar(array(
            'name'          => 'Footer 1',
            'id'            => 'footer1',
            'before_widget' => '<section class="widget">',
            'after_widget' => '</section>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
        ));

        register_sidebar(array(
            'name'          => 'Footer 2',
            'id'            => 'footer2',
            'before_widget' => '<section class="widget">',
            'after_widget' => '</section>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
        ));
    }

 ?>