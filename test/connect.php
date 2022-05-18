<?php

    $link = mysqli_connect("localhost","root","") or die ("khong the ket noi");
    mysqli_select_db($link,"dulieu777");
    $sql = "select * from  table1";
    $result = mysqli_query($link,$sql);
    echo '<table border = "1" width = "100%"';
    echo '<caption style = "text-align: center;"> DU lieu bang nha su </caption>';

    echo '<tr><th>Ma So</th><th>Ho ten</th><th>ngay sinh</th><th>nghe nghiep</th> </tr>';

    while($row = mysqli_fetch_array($result)){

        echo '<tr><th>'.$row["maso"].'</th><th>'.$row["hoten"].'</th><th>'.$row["ngaysinh"].'</th><th>'.$row["nghenghiep"].'</th> </tr>';
    }
    echo '</table>'
?>