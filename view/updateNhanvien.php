
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
        <input type="hidden" name="update">
        <table align='center' width='30%' boder='0'>
            <tr>
                <td>Ma Nha Vien</td>
                <td>
                    <input type="text" size ='20' name="IDNV" readonly id="" 
                    value = '<?php echo $id; ?>'>
                </td>
            </tr>
            <tr>
                <td>Họ và Tên</td>
                <td>
                    <input type="text" size ='20' name="HoTen" id="" value=" <?php echo $hoten ?>">
                </td>
            </tr>
            <tr>
                <td>
                <label for="cars">Chọn Phòng ban: </label>
                </td>
                <td>
                    <select name="IDPB" id="cars">
                        <?php 
                            foreach($phongbans as $phongban){
                                if($phongban->IDPB == $idpb){
                                    echo '<option Selected value="'.$phongban->IDPB.'">'.$phongban->Tenpb.'</option>';
                                }
                                else{
                                    echo '<option value="'.$phongban->IDPB.'">'.$phongban->Tenpb.'</option>';
                                }
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td>
                    <input type="text" size ='20' name="DiaChi" id="" value=" <?php echo $diachi ?>">
                </td>
            </tr>
            <tr align= 'center'>
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