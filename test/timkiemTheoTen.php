<?php

    $link = mysqli_connect("localhost","root","") or die ("khong the ket noi");
    mysqli_select_db($link,"dulieu");
    $idpb=$_GET["S1"];
    $Check =$_GET["C1"];
    $sql;
    if($Check == 1){
        $sql = 'select * from  nhanvien where IDNV = "'.$idpb.'"';
    }
    elseif($Check == 2){
        $sql = 'select * from  nhanvien where HoTen = "'.$idpb.'"';
    }
    else
    {
        $sql = 'select * from  nhanvien where DiaCHi = "'.$idpb.'"';
    }
        $result = mysqli_query($link,$sql);
    echo '<table border = "1" width = "100%"';
    echo '<caption style = "text-align: center;"> DU lieu bang nha su </caption>';

    echo '<tr><th>Ma So</th><th>Ho ten</th><th>Ma PB</th><th>Dia Chi</th> </tr>';

    while($row = mysqli_fetch_array($result)){

        echo '<tr><th>'.$row["IDNV"].'</th><th>'.$row["HoTen"].'</th><th>'.$row["IDPB"].'</th><th>'.$row["DiaChi"].'</th> <th> <a href="xemthongtinpb.php?id='.'">XXX</a></th> </tr>';
    }
    echo '</table>'
?>