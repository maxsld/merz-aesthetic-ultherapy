<?php
/**
 * Plugin Name:  Ultherapy PRIME – Landing Page
 * Description:  Ajoute un template de page isolé pour la landing page Ultherapy PRIME France. N'interfère pas avec le thème actif.
 * Version:      1.0.0
 * Author:       Merz Aesthetics France
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'ULTHERAPY_PRIME_DIR', plugin_dir_path( __FILE__ ) );
define( 'ULTHERAPY_PRIME_URL', plugin_dir_url( __FILE__ ) );

// ── 1. Enregistrer le template dans la liste des templates de page ──────────
add_filter( 'theme_page_templates', function ( $templates ) {
    $templates['ultherapy-prime'] = 'Ultherapy PRIME';
    return $templates;
} );

// ── 2. Charger notre fichier template quand la page l'utilise ───────────────
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

// ── 3. Charger CSS / JS uniquement sur cette page ───────────────────────────
add_action( 'wp_enqueue_scripts', function () {
    if ( ! is_page() ) return;
    $tpl = get_post_meta( get_the_ID(), '_wp_page_template', true );
    if ( $tpl !== 'ultherapy-prime' ) return;

    $url = ULTHERAPY_PRIME_URL;
    $v   = '1.0.0';

    wp_enqueue_style( 'ultherapy-fonts',
        'https://fonts.googleapis.com/css2?family=Parisienne&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap',
        [], null
    );
    wp_enqueue_style( 'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css',
        [], '7.0.1'
    );
    wp_enqueue_style( 'ultherapy-main',
        $url . 'assets/ultherapy.css',
        [ 'ultherapy-fonts', 'font-awesome' ], $v
    );

    wp_enqueue_script( 'gsap',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.7/gsap.min.js',
        [], '3.12.7', true
    );
    wp_enqueue_script( 'gsap-st',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.7/ScrollTrigger.min.js',
        [ 'gsap' ], '3.12.7', true
    );
    wp_enqueue_script( 'ultherapy-script',
        $url . 'assets/ultherapy.js',
        [ 'gsap', 'gsap-st' ], $v, true
    );

    // Supprimer les styles WordPress qui pourraient interférer
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'classic-theme-styles' );
}, 20 );
