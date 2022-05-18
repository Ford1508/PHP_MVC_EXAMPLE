<?php
    $bienketnoi = mysqli_connect('localhost', 'root', '') or die('could not connect:'.mysqli_error());
    $db_selected = mysqli_select_db($bienketnoi, 'dulieu');
    $rs = mysqli_query($bienketnoi,"DELETE FROM phongban");
    header("Location:delete.php");
?>
