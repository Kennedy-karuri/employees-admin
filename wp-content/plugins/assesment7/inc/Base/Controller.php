<?php

/**
 * @package assesment7
 */


 namespace Inc\Base;

 class Controller{

        public $plugin_name;
        public $plugin_url;
        public $plugin_path;

public function __construct(){
    $this->plugin_name = plugin_basename(dirname(__FILE__,3)).'/assesment7.php';
    $this->plugin_url = plugin_dir_url(dirname(__FILE__,2));
    $this->plugin_path = plugin_dir_path(dirname(__FILE__,2));


}




 }