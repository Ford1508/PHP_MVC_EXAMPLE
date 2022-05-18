
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phòng ban</title>
</head>
<body>
    <h2>Xóa phòng ban</h2>
    <Form action="" method="GET">
    <?php
        echo '<table border = "1" width = "100%"';
        echo '<caption style = "text-align: center;"> DU lieu bang nha su </caption>';

        echo '<tr><th>IDPB</th><th>Tenpb</th><th>MoTa</th><th>DELETE</th> </tr>';

        foreach($phongbans as $phongban){

            echo '<tr><th>'.$phongban->IDPB.'</th><th>'.$phongban->Tenpb.'</th><th>'.$phongban->MoTa.'</th><th> <a href="?ideletepb='.$phongban->IDPB.'">DELETE </a></th> </tr>';
        }
        echo '</table>'
    ?>
    </Form>
</body>
</html>