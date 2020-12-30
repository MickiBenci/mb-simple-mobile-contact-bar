<?php
/**
 * @package MB Mobile Contact Bar
 * Rendering functions
 */

namespace Inc\Rendering;

use \Inc\Base\BaseController;

class Render extends BaseController
{   
    public function register(){
        add_action('get_footer',array($this, 'display_bar'));
    }
    public function display_bar(){
        require_once( $this->plugin_path.'templates/frontend/mobile-contacts-render.php' );
    }   
    
}