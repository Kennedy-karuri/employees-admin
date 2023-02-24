<?php
/**
 *  @package assesment7
 */

namespace Inc\Pages;

use \Inc\Base\Controller;

class Admin extends Controller{

    function register(){
        add_action('admin_menu', array($this, 'add_admin_pages'));
    }

    function add_admin_pages(){
        add_menu_page('assesment7', 'assesment7', 'manage_options', 'assesment7', array($this, 'admin_index'), 'dashicons-admin-generic', 110);
    }

    function admin_index(){
        require_once $this->plugin_path . 'templates/main.php';  
    }
}