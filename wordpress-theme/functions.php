<?php

add_action('wp_enqueue_scripts', function () {
    $uri = get_template_directory_uri();
    $v   = '1.0';

    // Fonts
    wp_enqueue_style(
        'ultherapy-fonts',
        'https://fonts.googleapis.com/css2?family=Parisienne&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap',
        [],
        null
    );

    // Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css',
        [],
        '7.0.1'
    );

    // Main stylesheet
    wp_enqueue_style('ultherapy-main', $uri . '/assets/ultherapy.css', ['ultherapy-fonts', 'font-awesome'], $v);

    // GSAP
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.7/gsap.min.js', [], '3.12.7', true);
    wp_enqueue_script('gsap-st', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.7/ScrollTrigger.min.js', ['gsap'], '3.12.7', true);

    // Main script
    wp_enqueue_script('ultherapy-script', $uri . '/assets/ultherapy.js', ['gsap', 'gsap-st'], $v, true);
});

// Désactive le style par défaut de WordPress qui peut interférer
add_action('wp_enqueue_scripts', function () {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('classic-theme-styles');
}, 20);
