<?php

    $tenpb = $_REQUEST['txtTenpb'];
    $mota = $_REQUEST['txtMota'];
    $IDPB = $_REQUEST['IDPB'];
    $bienketnoi = mysqli_connect('localhost', 'root', '') or die('could not connect:'.mysqli_error());
    $db_selected = mysqli_select_db($bienketnoi, 'dulieu');
    $rs = mysqli_query($bienketnoi,"INSERT INTO phongban (IDPB, Tenpb, MoTa) VALUES ('$IDPB', '$tenpb', '$mota')");
    header("Location:capnhat.php");
?>
