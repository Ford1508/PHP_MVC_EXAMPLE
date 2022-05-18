

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phòng ban</title>
</head>
<body>
    <h2>xem thông tin nhân viên phòng ban</h2>
    <Form action="" method="GET">
    <?php
    echo '<table border = "1" width = "100%"';
    echo '<caption style = "text-align: center;"> DU lieu bang nha su </caption>';

    echo '<tr><th>IDNV</th><th>HoTen</th><th>IDPB</th><th>DiaChi</th></tr>';

    foreach($nhanviens as $nhanvien){

        echo '<tr><th>'.$nhanvien->IDNV.'</th><th>'.$nhanvien->HoTen.'</th><th>'.$nhanvien->IDPB.'</th><th>'.$nhanvien->DiaChi.'</th> </tr>';
    }
    echo '</table>'
    ?>
    </Form>
    <p><a href="javascript:history.back()">Quay lại</a></p>
</body>
</html>