<?php

/**
 * @package assesment7
 */


 /*

 Plugin Name: assesment7
 Plugin URI:
 Author: Kennedy Karuri
 Author URI:
 Description: This is a custom employee registration plugin
 Version:1.0.0
 License:GPL v2 or later
 Text-Domain: 
 */



 // creating security

 defined('ABSPATH') or die('gerrara here!');

 //checking if ifle exists

 if (file_exists(dirname(__FILE__).'/vendor/autoload.php')){
    require_once dirname(__FILE__).'/vendor/autoload.php';
 }

 //to activate externally

function activate_externally(){
    Inc\Base\Activate::activate();
}
register_activation_hook(__FILE__,'activate_externally');

// function to deactivate

function deactivate_externally(){
    Inc\Base\Deactivate::deactivate();
}

register_activation_hook( __FILE__,'deactivate_externally');


//class as a service

if(class_exists('Inc\\Init')){
    Inc\Init::register_classes();
}