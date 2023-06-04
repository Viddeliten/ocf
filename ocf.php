<?php
/**
 * @package Open_Custom_Fields
 * @version 1.0.0
 */
/*
Plugin Name: Open Custom Fields
Plugin URI: http://vidde.org
Free. This plugin is free.
Author: Johanna Julén
Version: 1.0.0
Author URI: http://vidde.org
*/

namespace ocf;
// dirname( __FILE__ )

class ocf {
    
    function __construct() {
        $this->init();
    }

    function init() {
        // Add admin menu 
        add_action( 'admin_menu', 'ocf\ocf::admin_menu' );
    }

    public static function admin_menu() {
        add_menu_page( __('OCF Options', 'ocf'), 'OCF', 'manage_options', 'ocf_options', 'ocf\ocf::admin_options', plugins_url('/assets/icons/mono-kdb-form.svg', __FILE__)); 
    }

    public static function admin_options() {
        echo '<div class="wrap">';
        echo '<p>Here is where the form would go if I actually had options.</p>';
        echo '</div>';
    }
}

new ocf;