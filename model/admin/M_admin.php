<?php
    include_once("E_admin.php");
    class Model_Admin{
        public function __construct() {}
        public function getAllAdmin(){
            $link = mysqli_connect("localhost", "root", "") or die ("Khong the ket noi den co so du lieu");
            mysqli_select_db($link, "dulieu");
            $sql = "select * from admin";
            $rs = mysqli_query($link, $sql);
            $i=0;
            $admins = array();
            while($row = mysqli_fetch_array($rs)){
                $id = $row['id'];
                $username = $row['username'];
                $password = $row['password'];
                $role = $row['role'];
                $admins[$i++] = new Entity_Admin($id, $username, $password, $role);
            }
            return $admins;
        }
        public function GetAdmin($user, $pass){
            $link = mysqli_connect('localhost','root','') or die('could not connect:'.mysqli_error());
            $db_selected = mysqli_select_db($link, "dulieu");
            $rs = mysqli_query($link,"SELECT * FROM admin WHERE username = '$user' and password = '$pass'");
            $i=0;
            $admins = array();
            while($row = mysqli_fetch_array($rs)){
                $id = $row['id'];
                $username = $row['username'];
                $password = $row['password'];
                $role = $row['role'];
                $admins[$i++] = new Entity_Admin($id, $username, $password, $role);
            }
            return $admins[0];
        }
    }
?>