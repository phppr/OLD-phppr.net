<?php

if('development' === PROJECT_MODE) {

    /**
     * function debug
     */
    function debug( $var ) {
        echo '<pre>' . print_r( $var, true ) . '</pre>';
    }

    /**
     * Ocultar admin bar top
     */
    add_filter('show_admin_bar', '__return_false');

}


if ( ! function_exists( 'theme_setup_features' ) ) {

    function theme_setup_features() {

        /**
         * Add support for multiple languages.
         */
        load_theme_textdomain( THEME_FX, THEME_PATH . '/languages' );
        load_theme_textdomain( 'odin', ODIN_PATH . '/languages' );

        /**
         * register menus
         */
        register_nav_menus(
            array(
                'main-menu' => __( 'Main Menu', 'odin' )
            )
        );

        /*
         * Add post_thumbnails suport.
         */
        add_theme_support( 'post-thumbnails' );

        /**
         * Add feed link.
         */
        add_theme_support( 'automatic-feed-links' );

        /**
         * Support Custom Editor Style.
         */
        // add_editor_style( 'assets/css/editor-style.css' );


        /**
         * Add support for Post Formats.
         */
        // add_theme_support( 'post-formats', array(
        //     'aside',
        //     'gallery',
        //     'link',
        //     'image',
        //     'quote',
        //     'status',
        //     'video',
        //     'audio',
        //     'chat'
        // ) );

        /**
         * Support The Excerpt on pages.
         */
        // add_post_type_support( 'page', 'excerpt' );

    }

}
add_action( 'after_setup_theme', 'theme_setup_features' );

/**
 * Register widget areas.
 */
function theme_widgets_init() {
    register_sidebar(
        array(
            'name'          => __( 'Main Sidebar', 'odin' ),
            'id'            => 'main-sidebar',
            'description'   => __( 'Site Main Sidebar', 'odin' ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widgettitle widget-title">',
            'after_title'   => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'theme_widgets_init' );

/**
 * Flush Rewrite Rules for new CPTs and Taxonomies.
 */
function theme_flush_rewrite() {
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'theme_flush_rewrite' );


/**
 * Load site scripts.
 */
function theme_enqueue_scripts() {
    // Load main stylesheet.
    wp_enqueue_style( 'style', get_stylesheet_uri(), array(), null, 'all' );

    // Load jQuery.
    wp_enqueue_script( 'jquery' );

    // Load jQuery plugins
    wp_enqueue_script( 'plugins', THEME_URL . '/assets/js/plugins.min.js', array() );

    // Main jQuery.
    if('production' === PROJECT_MODE) {
        wp_enqueue_script( 'app', THEME_URL . '/assets/js/application.min.js', array() );
    }
    else {
        wp_enqueue_script( 'app', THEME_URL . '/assets/js/application.js', array() );
    }

    // Load Thread comments WordPress script.
    if ( is_singular() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts', 1 );


/**
 * Custom stylesheet URI.
 */
function theme_custom_stylesheet_uri( $uri, $dir ) {

    if('production' === PROJECT_MODE) {
        $file = '/assets/css/style.min.css';
    }
    else {
        $file = '/assets/css/style.css';
    }

    $file = $dir . $file;

    return $file;
}
add_filter( 'stylesheet_uri', 'theme_custom_stylesheet_uri', 10, 2 );