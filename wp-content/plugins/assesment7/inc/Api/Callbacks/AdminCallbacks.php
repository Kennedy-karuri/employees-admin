<?php
/**
 * @package  assesment7
 */

namespace Inc\Api\Callbacks;
use Inc\Base\Controller;

class AdminCallbacks extends Controller{
    public function employeeDasboard(){
        return require_once("$this->plugin_path/templates/Employee.php");
    }
    public function newEmployeeMain(){
        return require_once("$this->plugin_path/templates/NewEmployee.php");
    }
    public function employeeDataMain(){
        return require_once("$this->plugin_path/templates/EmployeesData.php");
    }
}