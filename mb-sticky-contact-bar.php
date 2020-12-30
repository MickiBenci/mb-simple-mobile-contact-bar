<?php
/**
 * Plugin Name:       MB Sticky Contact Bar  
 * Description:       Display a sticky contact bar for mobile devices 
 * Version:           1.0
 * Author:            Michelangelo Bencivenga
 */

defined( 'ABSPATH' ) or die('Access denied');


if(file_exists(dirname(__FILE__).'/vendor/autoload.php')){
    require_once dirname(__FILE__).'/vendor/autoload.php';
}

use Inc\Base\Activate;
use Inc\Base\Deactivate;

function activate_mbc(){
    Activate::activate();
}
function deactivate_mbc(){
    Deactivate::deactivate();
}

register_activation_hook(__FILE__, 'activate_mbc');
register_deactivation_hook(__FILE__, 'deactivate_mbc');


if(class_exists( 'Inc\\Init' )){
    Inc\Init::register_services();
}

