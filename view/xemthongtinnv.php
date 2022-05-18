
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phòng ban</title>
</head>
<body>
    <h2>xem thông tin nhân viên</h2>
    <?php
    session_start();
    if (isset($_SESSION['admin_id'])) {
        if($_SESSION['role'] == 1){
            echo "<h2>you are admin</h2>";
            echo  '<button><a href="/Nh1916/controller/nhanvien/C_Nhanvien.php?nv_mod1=\'1\'">Thêm nhân viên</a></button>';
        }
        else{
            echo "<h2>you are not admin</h2>";
            echo  '<button disabled>Thêm nhân viên</button>';
        }
    }
    else {
        echo "<h2>You are not logged in!</h2>";
        echo  '<button disabled>Thêm nhân viên</button>';
    }
    ?>
    <br>
    <br>
    <Form action="" method="GET">
    <?php
    echo '<table border = "1" width = "100%"';
    echo '<caption style = "text-align: center;"> DU lieu bang nha su </caption>';
    if (isset($_SESSION['admin_id'])) {
        if($_SESSION['role'] == 1){
            echo '<tr><th>Ma So</th><th>Ho ten</th><th>Ma PB</th><th>Dia Chi</th><th>EDIT</th><th>DELETE</th> </tr>';
        }
    }
    else{
        echo '<tr><th>Ma So</th><th>Ho ten</th><th>Ma PB</th><th>Dia Chi</th></tr>';
    }
    if (isset($_SESSION['admin_id'])) {
        if($_SESSION['role'] == 1){
            foreach($nhanviens as $nhanvien){

                echo '<tr><th>'.$nhanvien->IDNV.'</th><th>'.$nhanvien->HoTen.'</th><th>'.$nhanvien->IDPB.'</th><th>'.$nhanvien->DiaChi.'</th><th> <a href="?ideditnv='.$nhanvien->IDNV.'">EDIT </a></th><th> <a href="?ideletenv='.$nhanvien->IDNV.'">DELETE </a></th> </tr>';
            }
        }
    }
    else{
        foreach($nhanviens as $nhanvien){
            echo '<tr><th>'.$nhanvien->IDNV.'</th><th>'.$nhanvien->HoTen.'</th><th>'.$nhanvien->IDPB.'</th><th>'.$nhanvien->DiaChi.'</th></tr>';
        }
    }
    echo '</table>'
    ?>
    </Form>
</body>
</html>