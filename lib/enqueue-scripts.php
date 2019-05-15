<?php

if (!function_exists('foundationpress_scripts')) :
    function foundationpress_scripts()
    {

        // Enqueue the main Stylesheet.
        wp_enqueue_style('main-stylesheet', get_template_directory_uri() . '/assets/css/app.css', array(), '2.6.1', 'all');

        //https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap

        wp_enqueue_style('google_fonts-css', 'https://fonts.googleapis.com/css?family=Arvo:400,700|Poppins:400,700,900', array(), '2.6.1', 'all', false);

        wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css', array(), '2.6.1', 'all');

        wp_enqueue_style('animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css', array(), '2.6.1', 'all');

        //wp_deregister_script('jquery');

        // CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
        //wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/javascript/vendor/jquery.js', array(), '2.1.0', false );
        //wp_enqueue_script('jquery');

        wp_enqueue_script('foundation', get_template_directory_uri() . '/assets/js/app.js', array(), '2.6.1', true);

    }

    add_action('wp_enqueue_scripts', 'foundationpress_scripts');
endif;