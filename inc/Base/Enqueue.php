<?php
/**
 * @package MB Mobile Contact Bar
 * Enqueue functions
 */

namespace Inc\Base;

use \Inc\Base\BaseController;

class Enqueue extends BaseController
{   
    public function register(){
        add_action( 'wp_enqueue_scripts', array( $this, 'init_plugin_assets' ));
        add_action( 'wp_enqueue_scripts', array( $this, 'init_plugin_js_scripts' ));        
        add_action( 'admin_enqueue_scripts', array( $this, 'init_iris_script' ));
        
    }

    public function init_plugin_assets(){
        wp_enqueue_style('custom-style', $this->plugin_url . 'assets/custom-style.min.css');
    }
    public function init_plugin_js_scripts(){
        wp_enqueue_script('mbc-custom-scripts', $this->plugin_url . 'assets/mbc-custom-scripts.js', array( 'jquery' ),'1.0.0', true);
    }
    
    public function init_iris_script(){
        wp_enqueue_script('iris_script', $this->plugin_url . 'assets/color-palette.js', array( 'jquery' ), true);
    }

    
}