<?php

    $tenpb = $_REQUEST['txtTenpb'];
    $mota = $_REQUEST['txtMota'];
    $myID = $_REQUEST['IDPB'];
    $bienketnoi = mysqli_connect('localhost', 'root', '') or die('could not connect:'.mysqli_error());
    $db_selected = mysqli_select_db($bienketnoi, 'dulieu');
    $rs = mysqli_query($bienketnoi,"UPDATE phongban SET Tenpb = '$tenpb', MoTa = '$mota' WHERE IDPB = '$myID' ");
    header("Location:capnhat.php");
?>
