<?php
/**
 * @package MB Mobile Contact Bar
 * Activate class
 */
namespace Inc\Base;

class Activate
{
    public static function activate(){
        flush_rewrite_rules();
    }
}