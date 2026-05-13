<?php
/**
 * Plugin Name:  Ultherapy PRIME – Landing Page
 * Description:  Standalone page template for the Ultherapy PRIME France landing page. Does not interfere with the active theme.
 * Version:      1.0.0
 * Author:       Merz Aesthetics France
 * License:      GPL-2.0-or-later
 * License URI:  https://www.gnu.org/licenses/gpl-2.0.html
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'ULTHERAPY_PRIME_DIR', plugin_dir_path( __FILE__ ) );
define( 'ULTHERAPY_PRIME_URL', plugin_dir_url( __FILE__ ) );

// ── 1. Register page template ───────────────────────────────────────────────
add_filter( 'theme_page_templates', function ( $templates ) {
    $templates['ultherapy-prime'] = 'Ultherapy PRIME';
    return $templates;
} );

// ── 2. Load our template file when the page uses it ─────────────────────────
add_filter( 'template_include', function ( $template ) {
    if ( is_page() ) {
        $tpl = get_post_meta( get_the_ID(), '_wp_page_template', true );
        if ( $tpl === 'ultherapy-prime' ) {
            $file = ULTHERAPY_PRIME_DIR . 'templates/page-ultherapy.php';
            if ( file_exists( $file ) ) {
                return $file;
            }
        }
    }
    return $template;
} );

// ── 3. Enqueue assets only on this page (all local — no external CDN) ───────
add_action( 'wp_enqueue_scripts', function () {
    if ( ! is_page() ) return;
    $tpl = get_post_meta( get_the_ID(), '_wp_page_template', true );
    if ( $tpl !== 'ultherapy-prime' ) return;

    $url = ULTHERAPY_PRIME_URL;
    $v   = '1.0.0';

    // Fonts — self-hosted
    wp_enqueue_style( 'ultherapy-fonts',
        $url . 'assets/vendor/google-fonts.css',
        [], $v
    );

    // Font Awesome 7 — self-hosted
    wp_enqueue_style( 'ultherapy-font-awesome',
        $url . 'assets/vendor/font-awesome.min.css',
        [], '7.0.1'
    );

    // Main stylesheet
    wp_enqueue_style( 'ultherapy-main',
        $url . 'assets/ultherapy.css',
        [ 'ultherapy-fonts', 'ultherapy-font-awesome' ], $v
    );

    // GSAP — self-hosted
    wp_enqueue_script( 'ultherapy-gsap',
        $url . 'assets/vendor/gsap.min.js',
        [], '3.12.7', true
    );
    wp_enqueue_script( 'ultherapy-gsap-st',
        $url . 'assets/vendor/ScrollTrigger.min.js',
        [ 'ultherapy-gsap' ], '3.12.7', true
    );

    // Main script
    wp_enqueue_script( 'ultherapy-script',
        $url . 'assets/ultherapy.js',
        [ 'ultherapy-gsap', 'ultherapy-gsap-st' ], $v, true
    );

    // Remove WP styles that could interfere
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'classic-theme-styles' );
}, 20 );
