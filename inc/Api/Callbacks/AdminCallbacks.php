<?php
/**
 * @package MB Mobile Contact Bar
 * Plugin Callbacks
 * 
 */
namespace Inc\Api\Callbacks;

use Inc\Base\BaseController;

class AdminCallbacks extends BaseController
{   
    //Get Admin Template
    public function adminDashboard(){
        return require_once ("$this->plugin_path/templates/backend/admin.php" );
    }

    //Display Admin Inputs
	public function mbcPhoneNumber()
	{
		$value = esc_attr( get_option( 'phone_number' ) );
		echo '<input type="tel" class="regular-text" name="phone_number" value="' . $value . '" placeholder="+39 123 12 12 123">';
    }
    
    public function mbcWhatsApp()
	{
		$value = esc_attr( get_option( 'whatsapp' ) );
		echo '<input type="tel" class="regular-text" name="whatsapp" value="' . $value . '" placeholder="+39 123 12 12 123">';
    }
    
	public function mbcEmail()
	{
		$value = esc_attr( get_option( 'email' ) );
		echo '<input type="email" class="regular-text" name="email" value="' . $value . '" placeholder="Write your email...">';
    }
    
    public function mbcBgColor()
    {
        $value = get_option( 'bg-color' ) ? esc_attr( get_option( 'bg-color' ) ) : '#e2e2e2' ;
		echo '<input type="text" class="color-picker" name="bg-color" value="' . $value . '">';
    }
    public function mbcPhColor()
    {
        $value = get_option( 'ph-color' ) ? esc_attr( get_option( 'ph-color' ) ) : '#0000ff' ;
		echo '<input type="text" class="color-picker" name="ph-color" value="' . $value . '">';
    }
    public function mbcWaColor()
    {
        $value = get_option( 'wa-color' ) ? esc_attr( get_option( 'wa-color' ) ) : '#25d366' ;
		echo '<input type="text" class="color-picker" name="wa-color" value="' . $value . '">';
    }
    public function mbcEmailColor()
    {
        $value = get_option( 'email-color' ) ? esc_attr( get_option( 'email-color' ) ) : '#B0896C' ;
		echo '<input type="text" class="color-picker" name="email-color" value="' . $value . '">';
    }
}