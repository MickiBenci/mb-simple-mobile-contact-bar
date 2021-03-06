<?php
/**
 * @package  MB Mobile Contact Bar
 * Settings Links
 */
namespace Inc\Base;

use \Inc\Base\BaseController;

class SettingsLinks extends BaseController
{
	
	public function register() 
	{
		add_filter( "plugin_action_links_$this->plugin", array( $this, 'settings_link' ) );
	}

	public function settings_link( $links ) 
	{
		$settings_link = '<a href="admin.php?page=mbc_contact_mobile_bar">Settings</a>';
		array_push( $links, $settings_link );
		return $links;
	}
}
