<?php
    include_once("../../model/admin/M_admin.php");
    $user = $_REQUEST['username'];
    $pass = $_REQUEST['password'];
    $modeladmin = new Model_Admin();
    $admin = $modeladmin->GetAdmin($user, $pass);
    echo $admin->username;
    echo $admin->password;
    echo $admin->role;
    if ($user == "" || $pass == "")  
    {
        header("Location: ../../view/login.php");
    }
    else 
    {
        if(!$admin){
            header("Location: ../../view/login.php");
        }
        else if($admin)
        {
            session_start();
            $_SESSION['admin_id'] = $admin->id;
            $_SESSION['username'] = $admin->username;
            $_SESSION['role'] = $admin->role;

            header("Location: ../../controller/phongban/C_Phongban.php");
        }
    }
?>