<?php 
    function rara_customize_register($wp_customize){
        // Showcase Section
        $wp_customize->add_section('showcase', array(
            'title'         => __('Showcase', 'Rara Test'),
            'description'   => sprintf(__('Options for showcase', 'Rara Test')),
            'priority'      => 130
            ));

        $wp_customize->add_setting('showcase_image');

        $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'showcase', array(
            'label' => 'Image',
            'section' => 'showcase',
            'settings' => 'showcase_image',
            'width' => 448,
            'height' => 532,
            'priority' => 1
        )));

        $wp_customize->add_setting('showcase_heading', array(
            'default'   => _x('Custom Bootstrap WordPress Theme', 'Rara Test'),
            'type'      => 'theme_mod'
            ));

        $wp_customize->add_control('showcase_heading', array(
            'label'     => __('Heading', 'Rara Test'),
            'section'   => 'showcase',
            'priority'  => 2
            ));

        $wp_customize->add_setting('showcase_text', array(
            'default'   => _x('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ullam eum itaque porro facilis praesentium dicta fugit quo, possimus mollitia reprehenderit ipsam accusantium accusamus reiciendis odit! Aliquam inventore nam et.', 'Rara Test'),
            'type'      => 'theme_mod'
            ));

        $wp_customize->add_control('showcase_text', array(
            'label'     => __('Text', 'Rara Test'),
            'section'   => 'showcase',
            'priority'  => 3
            ));

        $wp_customize->add_setting('btn_url', array(
            'default'   => _x('http://test.com', 'Rara Test'),
            'type'      => 'theme_mod'
            ));

        $wp_customize->add_control('btn_url', array(
            'label'     => __('Button URL', 'Rara Test'),
            'section'   => 'showcase',
            'priority'  => 4
            ));

        $wp_customize->add_setting('btn_text', array(
            'default'   => _x('Read More', 'Rara Test'),
            'type'      => 'theme_mod'
            ));

        $wp_customize->add_control('btn_text', array(
            'label'     => __('Button Text', 'Rara Test'),
            'section'   => 'showcase',
            'priority'  => 5
            ));

        $wp_customize->add_setting('showcase_featured1');

        $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'showcase_featured1', array(
            'label' => 'Featured 1',
            'section' => 'showcase',
            'settings' => 'showcase_featured1',
            'priority'  => 6,
            'width' => 112,
            'height' => 46
        )));

        $wp_customize->add_setting('showcase_featured2');

        $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'showcase_featured2', array(
            'label' => 'Featured 2',
            'section' => 'showcase',
            'settings' => 'showcase_featured2',
            'priority'  => 7,
            'width' => 112,
            'height' => 46
        )));

        $wp_customize->add_setting('showcase_featured3');

        $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'showcase_featured3', array(
            'label' => 'Featured 3',
            'section' => 'showcase',
            'settings' => 'showcase_featured3',
            'priority'  => 8,
            'width' => 112,
            'height' => 46
        )));

        $wp_customize->add_setting('showcase_featured4');

        $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'showcase_featured4', array(
            'label' => 'Featured 4',
            'section' => 'showcase',
            'settings' => 'showcase_featured4',
            'priority'  => 9,
            'width' => 112,
            'height' => 46
        )));

    }

    add_action('customize_register', 'rara_customize_register');

?>