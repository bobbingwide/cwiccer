<?php

/**
Plugin Name: cwiccer
Plugin URI: https://www.oik-plugins.com/oik-plugins/cwiccer
Description: Display PageSpeed Insights performance scores in a row
Version: 0.0.1
Author: bobbingwide
Author URI: https://bobbingwide.com/about-bobbing-wide
Text Domain: cwiccer
Domain Path: /languages/
License: GPLv2

@Copyright (C) Copyright Bobbing Wide 2022-2023
 */

function cwiccer_loaded() {
    add_action( 'init', 'cwiccer_init');
    add_action( "plugins_loaded", "cwiccer_plugins_loaded");
    
}

function cwiccer_init() {
    add_shortcode( 'cwiccer', 'cwiccer_shortcode');
}

function cwiccer_shortcode( $atts, $content, $tag ) {
    $html = "cwiccer";
    $cwiccer_shortcode = new cwiccer_shortcode();
    $html = $cwiccer_shortcode->run( $atts, $content, $tag );
    return $html;
}

/**
 * Implements 'plugins_loaded' action for foster-child.
 *
 * Prepares the use of shared libraries if this has not already been done.
 */
function cwiccer_plugins_loaded() {
    cwiccer_boot_libs();
    oik_require_lib( "bwtrace" );
    oik_require_lib( "bobbfunc" );
    //bw_load_plugin_textdomain( "cwiccer");
    cwiccer_enable_autoload();
}

/**
 * Boot up process for shared libraries
 *
 * ... if not already performed
 */
function cwiccer_boot_libs() {
    if ( !function_exists( "oik_require" ) ) {
        $oik_boot_file = __DIR__ . "/libs/oik_boot.php";
        $loaded = include_once( $oik_boot_file );
    }
    oik_lib_fallback( __DIR__ . "/libs" );
}

function cwiccer_enable_autoload() {
    add_filter( "oik_query_autoload_classes" , "cwiccer_query_autoload_classes" );
    $lib_autoload=oik_require_lib( 'oik-autoload' );
    if ( $lib_autoload && ! is_wp_error( $lib_autoload ) ) {
        oik_autoload( true );
    } else {
        BW_::p( "oik-autoload library not loaded" );
        gob();
    }
}

function cwiccer_query_autoload_classes( $classes ) {
    $classes[] = array( "class" => "cwiccer_shortcode"
    , "plugin" => "cwiccer"
    , "path" => "classes"
    , 'file' => 'classes/class-cwiccer-shortcode.php'
    );

    return( $classes );
}

cwiccer_loaded();
