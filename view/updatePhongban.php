
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method='POST'>
        <input type="hidden" name="update" value="1">
        <table width='100%' boder='0'>
            <tr>
                <td>Ma Phong Ban</td>
                <td>
                    <input type="text" size ='20' name="IDPB" readonly id="" 
                    value = '<?php echo $id; ?>'>
                </td>
            </tr>
            <tr>
                <td>Ten Phong Ban</td>
                <td>
                    <input type="text" size ='20' name="Tenpb" id="" 
                    value = '<?php echo $tenpb; ?>'>
                </td>
            </tr>
            <tr>
                <td>Mo Ta</td>
                <td>
                    <input type="text" size ='20' name="MoTa" id="" 
                    value = '<?php echo $mota; ?>'>
                </td>
            </tr>
            <tr style="align: center">
                <td colspan = '2'>
                    <input type="submit" value="OK">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
    <p><a href="javascript:history.back()">Quay lại</a></p>
</body>
</html>