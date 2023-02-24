<?php
/**
 * @package assesment7
 */

 namespace Inc\Pages;

 use \Inc\Api\SettingsApi;

 
 class Admin{

   public $settings;

   public $callbacks;

   public $pages = array();

   public $subpages = array();

   public function register(){
      $this->settings = new SettingsApi();

    

      $this->setPages();

   

     
   }

  public function setPages(){

   $this->pages = array(
      [
      'page_title'   =>    'Assesment7',
      'menu_title'   =>    'Assesment7',
      'capability'   =>    'manage_options',
      'menu_slug'    =>    'Assesment_7',
      'callback'     =>    array( $this->callbacks, 'adminDashboard' ),
      'icon_url'     =>    'dashicons-admin-site-alt',
      'position'     =>    110
      ]

   );

  }
 

}