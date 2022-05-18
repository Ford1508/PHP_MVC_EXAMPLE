<?php
    $bienketnoi  = mysqli_connect('localhost','root','') or die('could not connect:'.mysqli_error());
    $db_selected = mysqli_select_db($bienketnoi, 'dulieu');
    $rs = mysqli_query($bienketnoi,'SELECT * FROM phongban');
    echo '<Form action="xuly_delete.php">';
    echo '<table border="1" width="100%">';
    echo '<caption>Du lieu bang phong ban</caption>';
    echo '<tr><th>Ma Phong Ban</th><th>Ten Phong Ban</th><th>Mo Ta</th><th>Xoa</th></tr>';
    while($row = mysqli_fetch_array($rs)){
        echo 
        '<tr><td>'.$row['IDPB'].'</td><td>'.$row['Tenpb'].'</td><td>'.$row['MoTa'].'</td><td><a href = "xuly_delete.php?IDPB='.$row['IDPB'].'">xoa</a></td></tr>';
    }
    echo '<a href="xulydeleteAll.php"><input type="button" value="Delete All"></a>';
    echo'</Form>';
?>