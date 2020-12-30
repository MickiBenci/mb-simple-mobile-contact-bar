<?php
/**
 * @package MB Mobile Contact Bar
 * Deactivate class
 */

namespace inc\base;

class deactivate
{
    public static function deactivate(){
        flush_rewrite_rules();
    }
}