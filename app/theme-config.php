<?php

/**
 *  Definitions
 */
$the_theme = wp_get_theme();
define( 'THEME_NAME', $the_theme['Name'] );
define( 'THEME_VERSION', $the_theme['Version'] );
define( 'THEME_FX', str_replace( ' ', '_', strtolower( THEME_NAME ) ) );
define( 'THEME_PATH', get_template_directory() );
define( 'THEME_URL', get_template_directory_uri() );

define( 'ODIN_PATH', THEME_PATH . '/app/odin-framework' );
define( 'ODIN_URL', THEME_URL . '/app/odin-framework' );

define( 'ADMIN_PATH', THEME_PATH . '/app/admin' );
define( 'ADMIN_URL', THEME_URL . '/app/admin' );

define( 'FUNCTIONS_PATH', THEME_PATH . '/app/functions' );
define( 'FUNCTIONS_URL', THEME_URL . '/app/functions' );

/**
 * Project mode
 * development or production
 */
define( 'PROJECT_MODE', 'development' );
