<?php
    $user = $_REQUEST['username'];
    $pass = $_REQUEST['password'];
    if ($user == "" || $pass == "")  header("Location: login.php");
    else {
        $link = mysqli_connect('localhost','root','') or die('could not connect:'.mysqli_error());
        $db_selected = mysqli_select_db($link, "dulieu");
        $rs = mysqli_query($link,"SELECT * FROM admin WHERE username = '$user' and password = '$pass'");
        if(mysqli_num_rows($rs) == 0) header("Location: login.php");
        else                          header("Location: capnhat.php");
        mysqli_free_result($rs);
    }
?>