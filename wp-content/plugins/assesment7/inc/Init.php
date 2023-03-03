<?php

/**
 * @package assesment7
 */

namespace Inc;

 final class Init{
    
   Public static function get_classes(){
        return[
                Base\Controller::class,
                Base\Enqueue::class,
                Pages\Admin::class,
                // Base\GetEmployee::class,
              
        ];

    }

    Public static function register_classes(){
        foreach(self::get_classes() as $classes){
            $service = self::instantiate($classes);
            if (method_exists($service, 'register')){
                $service->register();
            }

        }


    }

    Public static function instantiate($classes){

        $service = new $classes;
        return $service;
        


    }
}