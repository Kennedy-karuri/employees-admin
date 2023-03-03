<?php
/**
 * @package assesment7
 */

 namespace Inc\Base;

 class GetEmployee
    {

        public function register(){
            $this->create_table_to_db();
            $this->pass_to_db();
        }
                public function create_table_to_db()
        {
            global $wpdb;

            $table_name= $wpdb->prefix.'register';
            $charset= $wpdb->get_charset_collate();

            $employee="CREATE TABLE IF NOT EXISTS ".$table_name."(
                username text NOT NULL,
                email text NOT NULL,
                phone text NOT NULL,
                password text NOT NULL
            )$charset;";
            require_once(ABSPATH.'wp-admin/includes/upgrade.php');
            dbDelta($employee);
        }

        public function pass_to_db()
        {
    if (isset($_POST['submitdata'])) {
        $data = array(
            'username'=>$_POST['username'],
            'email'=>$_POST['email'],
            'phone'=>$_POST['phone'],
            'password'=>md5($_POST['password']),
        );
        global $wpdb;
        $table_name=$wpdb->prefix.'register';
        $result=$wpdb->insert($table_name, $data, $format=null);

        if ($result == true) {
            echo "<script>alert('Employee saved successfully')</script>";
        } else {
            echo "<script>alert('Employee not saved')</script>";
        }
    }
}

}

