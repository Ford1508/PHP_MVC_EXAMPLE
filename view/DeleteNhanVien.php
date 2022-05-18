
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phòng ban</title>
</head>
<body>
    <h2>Xóa nhân viên</h2>
    <Form action="" method="GET">
    <?php
    echo '<table border = "1" width = "100%"';
    echo '<caption style = "text-align: center;"> Du lieu bang nha su </caption>';

    echo '<tr><th>Ma So</th><th>Ho ten</th><th>Ma PB</th><th>Dia Chi</th><th>DELETE</th> </tr>';

    foreach($nhanviens as $nhanvien){

        echo '<tr><th>'.$nhanvien->IDNV.'</th><th>'.$nhanvien->HoTen.'</th><th>'.$nhanvien->IDPB.'</th><th>'.$nhanvien->DiaChi.'</th><th> <a href="?ideletenv='.$nhanvien->IDPB.'">DELETE </a></th> </tr>';
    }
    echo '</table>'
    ?>
    </Form>
</body>
</html>