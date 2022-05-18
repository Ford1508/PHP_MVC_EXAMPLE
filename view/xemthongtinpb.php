
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phòng ban</title>
</head>
<body>
    <h2>xem thông tin phòng ban</h2>
    <?php
    session_start();
    if (isset($_SESSION['admin_id'])) {
        if($_SESSION['role'] == 1){
            echo "<h2>you are admin</h2>";
            echo  '<button><a href="/Nh1916/controller/phongban/C_Phongban.php?pb_mod1=\'1\'">Thêm phòng ban</a></button>';
        }
        else{
            echo "<h2>you are not admin</h2>";
            echo  '<button disabled>Thêm phòng ban</button>';
        }
    }
    else {
        echo "<h2>You are not logged in!</h2>";
        echo  '<button disabled>Thêm phòng ban</button>';
    }
    ?>
    <br>
    <br>
    <Form action="" method="GET">
    <?php
        echo '<table border = "1" width = "100%"';
        echo '<caption style = "text-align: center;"> DU lieu bang nha su </caption>';

        echo '<tr><th>IDPB</th><th>Tenpb</th><th>MoTa</th><th>danh sách nhân viên</th> </tr>';
        if (isset($_SESSION['admin_id'])) {
            if($_SESSION['role'] == 1){
                foreach($phongbans as $phongban){
                    echo '<tr><th>'.$phongban->IDPB.'</th><th>'.$phongban->Tenpb.'</th><th>'.$phongban->MoTa.'</th><th> <a href="?idpb='.$phongban->IDPB.'">XXX </a></th><th> <a href="?ideditpb='.$phongban->IDPB.'">EDIT </a></th><th><a href="?iddelpb='.$phongban->IDPB.'">DELETE </a></th></tr>';
                }
            }
        }
        else{
            foreach($phongbans as $phongban){
                echo '<tr><th>'.$phongban->IDPB.'</th><th>'.$phongban->Tenpb.'</th><th>'.$phongban->MoTa.'</th><th> <a href="?idpb='.$phongban->IDPB.'">XXX </a></th></tr>';
            }
        }
        echo '</table>'
    ?>
    </Form>
</body>
</html>