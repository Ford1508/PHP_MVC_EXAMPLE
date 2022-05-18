<?php
    include_once("../../model/admin/M_admin.php");
    class Ctrl_Admin{
        public function invoke(){
                include_once("../../view/login.php");
                $user = $_REQUEST['username'];
                $pass = $_REQUEST['password'];
        }
    }
    $c_admin = new Ctrl_Admin();
    $c_admin->invoke();

?>