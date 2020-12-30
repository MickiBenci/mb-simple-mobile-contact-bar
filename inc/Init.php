<?php
/**
 * @package MB Mobile Contact Bar
 * Init Class
 */
namespace Inc;

final class init
{   /**
    * Store all classes inside array
    * @return all classes array
    */
    public static function get_services(){
        return [
            Pages\Admin::class,
            Base\Enqueue::class,            
            Base\SettingsLinks::class,
            Rendering\Render::class
        ];
    }

    /**
     * Get the array of classes and assign all terms to $service
     * in order to instantiate the register method
     */
    public static function register_services(){
        foreach (self::get_services() as $class) {
            $service = self::instantiate($class);

            if ( method_exists( $service, 'register' ) ){
                $service -> register();
            }
        }
    }
    /**
     * Method for instantiate the class
     *  @return new class instance
     */
    private static function instantiate($class){
            return new $class;
    }
}