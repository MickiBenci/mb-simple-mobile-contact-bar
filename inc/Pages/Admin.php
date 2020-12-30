<?php 
/**
 * @package  MB Mobile Contact Bar
 * Admin page backend
 */
namespace Inc\Pages;

use Inc\Api\SettingsApi;
use Inc\Base\BaseController;
use Inc\Api\Callbacks\AdminCallbacks;

/**
* 
*/
class Admin extends BaseController
{
	
	//Declare Variables
	public $settings;

	public $callbacks;

	public $pages = array();

	public $subpages = array();



	
	//Register Functions
	public function register() 
	{
		$this->settings = new SettingsApi();

		$this->callbacks = new AdminCallbacks();

		$this->setPages();

		$this->setSettings();
		$this->setSections();
		$this->setFields();

		$this->settings->addPages( $this->pages )->register();
	}

	//Setters for Admin Page
	public function setPages() 
	{
		$this->pages = array(
			array(
                'page_title' => 'MB Contact Mobile Bar',
                'menu_title' => 'MBC',
                'capability' => 'manage_options',
                'menu_slug' => 'mbc_contact_mobile_bar',
                'callback' => array( $this->callbacks, 'adminDashboard'),
                'icon_url' => 'dashicons-share',
                'position' => 110
            )
		);
	}
	
	public function setSettings()
	{
		$args = array(
			array(
				'option_group' => 'mbc_options_group',
				'option_name' => 'phone_number'
			),
			array(
				'option_group' => 'mbc_options_group',
				'option_name' => 'whatsapp'
			),
			array(
				'option_group' => 'mbc_options_group',
				'option_name' => 'email'
			),
			array(
				'option_group' => 'mbc_options_group',
				'option_name' => 'bg-color'
			),
			array(
				'option_group' => 'mbc_options_group',
				'option_name' => 'wa-color'
			),
			array(
				'option_group' => 'mbc_options_group',
				'option_name' => 'ph-color'
			),
			array(
				'option_group' => 'mbc_options_group',
				'option_name' => 'email-color'
			)
		);

		$this->settings->setSettings( $args );
	}

	public function setSections()
	{
		$args = array(
			array(
				'id' => 'mbc_admin_index',
				'title' => 'Settings',
				'page' => 'mbc_contact_mobile_bar'
			),
			array(
				'id' => 'mbc_admin_style',
				'title' => 'Style',
				'page' => 'mbc_contact_mobile_bar'
			)
		);

		$this->settings->setSections( $args );
	}

	public function setFields()
	{
		$args = array(
			array(
				'id' => 'phone_number',
				'title' => 'Phone Number',
				'callback' => array( $this->callbacks, 'mbcPhoneNumber' ),
				'page' => 'mbc_contact_mobile_bar',
				'section' => 'mbc_admin_index',
				'args' => array(
					'label_for' => 'phone_number',
					'class' => 'example-class'
				)
			),
			array(
				'id' => 'email',
				'title' => 'Email',
				'callback' => array( $this->callbacks, 'mbcEmail' ),
				'page' => 'mbc_contact_mobile_bar',
				'section' => 'mbc_admin_index',
				'args' => array(
					'label_for' => 'email'
				)
			),
			array(
				'id' => 'whatsapp',
				'title' => 'Whatsapp',
				'callback' => array( $this->callbacks, 'mbcWhatsApp' ),
				'page' => 'mbc_contact_mobile_bar',
				'section' => 'mbc_admin_index',
				'args' => array(
					'label_for' => 'email'
				)
			),
			array(
				'id' => 'bg-color',
				'title' => 'Background Color',
				'callback' => array( $this->callbacks, 'mbcBgColor' ),
				'page' => 'mbc_contact_mobile_bar',
				'section' => 'mbc_admin_style',
				'args' => array(
					'label_for' => 'bg-color'
					
				)
			),
			array(
				'id' => 'ph-color',
				'title' => 'Phone Icon Color',
				'callback' => array( $this->callbacks, 'mbcPhColor' ),
				'page' => 'mbc_contact_mobile_bar',
				'section' => 'mbc_admin_style',
				'args' => array(
					'label_for' => 'bg-color'
					
				)
			),
			array(
				'id' => 'wa-color',
				'title' => 'WhatsApp Icon Color',
				'callback' => array( $this->callbacks, 'mbcWaColor' ),
				'page' => 'mbc_contact_mobile_bar',
				'section' => 'mbc_admin_style',
				'args' => array(
					'label_for' => 'bg-color'
					
				)
			),
			array(
				'id' => 'email-color',
				'title' => 'Email Icon Color',
				'callback' => array( $this->callbacks, 'mbcPhColor' ),
				'page' => 'mbc_contact_mobile_bar',
				'section' => 'mbc_admin_style',
				'args' => array(
					'label_for' => 'bg-color'
					
				)
			)
		);

		$this->settings->setFields( $args );
	}
}