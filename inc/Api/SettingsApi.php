<?php
/**
 * @package MB Mobile Contact Bar
 * Api Settings
 */
namespace Inc\Api;

class SettingsApi
{	

	//Declare Empty Array
	public $admin_pages = array();
	public $admin_subpages = array();
	public $settings = array();
	public $sections = array();
	public $fields = array();


	//Register Functions
	public function register()
	{
		if ( ! empty($this->admin_pages) ) {
			add_action( 'admin_menu', array( $this, 'addAdminMenu' ) );
		}
		if ( ! empty($this->settings) ) {
			add_action( 'admin_init', array( $this, 'registerCustomFields' ) );
		}
	}


	//Add Admin Page
	public function addPages( array $pages )
	{
		$this->admin_pages = $pages;

		return $this;
	}

	
	public function addAdminMenu()
	{
		foreach ( $this->admin_pages as $page ) {
			add_menu_page( 
                $page['page_title'], 
                $page['menu_title'], 
                $page['capability'], 
                $page['menu_slug'], 
                $page['callback'], 
                $page['icon_url'], 
                $page['position']
            );
		}
	}

	//Setters and Functions for Admin Page
	public function setSettings( array $settings )
	{
		$this->settings = $settings;

		return $this;
	}
	public function setSections( array $sections )
	{
		$this->sections = $sections;

		return $this;
	}
	public function setFields( array $fields )
	{
		$this->fields = $fields;

		return $this;
	}

	public function registerCustomFields()
	{
		//register setting
        foreach ($this->settings as $setting) {
            register_setting(
                $setting["option_group"],
                $setting["option_name"],
                isset($setting["callback"])? $setting["callback"] : ''
            );
        }
		//add setting
        foreach ($this->sections as $section) {
            add_settings_section(
                $section["id"],
                $section["title"],
                isset($section["callback"])? $section["callback"] : '',
                $section["page"]
            );
        }
		//add custom field
        foreach ($this->fields as $field) {
            add_settings_field(
                $field["id"],
                $field["title"],
                isset($field["callback"])? $field["callback"] : '',
                $field["page"],
                $field["section"],
                isset($field["args"])? $field["args"] : ''
            );
        }
	}
}