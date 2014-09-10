<?
/*
Plugin Name: WordPress TraceKit Analytics
Description: Uses TraceKit to track uncaught exceptions in Google Analytics.
Version: 0.1
Author: Stefan Fisk
Author URI: http://stefanfisk.com
License: MIT
*/

class SF_TraceKitAnalytics {
    function __construct()
    {
        add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
    }

    function enqueue_scripts()
    {
      wp_enqueue_script('tracekit', plugin_dir_url(__FILE__).'tracekit.js', array('jquery'), filemtime(plugin_dir_path(__FILE__).'tracekit.js'), true);
      wp_enqueue_script('wp-tracekit-analytics', plugin_dir_url(__FILE__).'wp-tracekit-analytics.js', array('jquery', 'tracekit'), filemtime(plugin_dir_path(__FILE__).'wp-tracekit-analytics.js'), true);
    }
}

new SF_TraceKitAnalytics();
