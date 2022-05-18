<?php
    include_once("../../model/phongban/M_phongban.php");
    include_once("../../model/nhanvien/M_nhanvien.php");
    class Ctrl_Nhanvien{
        public function invoke()
        {
            if (isset($_GET['ideletenv'])){
                $modelnhanvien = new Model_Nhanvien();
                $modelnhanvien->DeleteNhanvien($_GET['ideletenv']);
                header("Location:C_Nhanvien.php");
            }
            elseif (isset($_GET['ideditnv'])){
                echo 'cap nhat';
                $modelnhanvien = new Model_Nhanvien();
                $nhanvien = $modelnhanvien->getNhanvienDetail($_GET['ideditnv']);
                $id = $nhanvien->IDNV;
                $hoten = $nhanvien->HoTen;
                $idpb = $nhanvien->IDPB;
                $diachi = $nhanvien->DiaChi;
                $modelPhongban = new Model_Phongban();
                $phongbans = $modelPhongban->getAllPhongBan();
                include_once("../../view/updateNhanvien.php");
                if(isset($_REQUEST['update'] )){
                    if($_REQUEST['IDNV'] !='' and $_REQUEST['HoTen'] !='' and $_REQUEST['IDPB'] !='' and $_REQUEST['DiaChi'] !=''){
                        $modelnhanvien->UpdateNhanvien($id, $_REQUEST['HoTen'], $_REQUEST['IDPB'], $_REQUEST['DiaChi']);
                        header("Location:C_Nhanvien.php");
                    }
                }
            }
            elseif (isset($_GET['nv_mod1'])){
                $modelnhanvien = new Model_Nhanvien();
                $nhanviens = $modelnhanvien->getAllNhanVien();
                @$LastID = end(array_column($nhanviens,'IDNV'));
                $str = (int)substr($LastID, -2) + 1;
                $newID = '';
                if($str <10){
                    $newID = 'NV0'.$str;
                }
                else 
                {
                    $newID ='NV'.$str;
                }
                $modelPhongban = new Model_Phongban();
                $phongbans = $modelPhongban->getAllPhongBan();
                include_once("../../view/AddNhanvien.php");
            }
            elseif (isset($_GET['idpb'])) {
                $modelnhanvien = new Model_Nhanvien();
                $nhanviens = $modelnhanvien->getAllNVByPhongBan($_GET['idpb']);
                include_once("../../view/xemthongtinnvpb.php");
            }
            else
            {
                $modelnhanvien = new Model_Nhanvien();
                $nhanviens = $modelnhanvien->getAllNhanVien();
                include_once("../../view/xemthongtinnv.php");
                if(isset($_GET['IDNV']) and isset($_GET['HoTen']) and isset($_GET['IDPB']) and isset($_GET['DiaChi'])){
                    if($_GET['IDNV'] !='' and $_GET['HoTen'] !='' and $_GET['IDPB'] !='' and $_GET['DiaChi'] !=''){
                        $modelnhanvien->AddNhanvien();
                        header("Location:C_Nhanvien.php");
                    }
                }
            }
        }
        public function timkiem()
        {
            if (isset($_GET['view'])){
                $modelnhanvien = new Model_Nhanvien();
                $check = @$_GET['C1'];
                $text = @$_GET['S1'];
                if($check == 1){
                    $nhanviengetby = $modelnhanvien->getAllNhanVienByID($text);
                    echo '<table border = "1" width = "100%"';
                    echo '<caption style = "text-align: center;"> DU lieu bang nha su </caption>';
                
                    echo '<tr><th>IDNV</th><th>Họ Tên</th><th>IDPB</th><th>Địa chỉ</th></tr>';
                
                    foreach($nhanviengetby as $nhanvien){
                        echo '<tr><th>'.$nhanvien->IDNV.'</th><th>'.$nhanvien->HoTen.'</th><th>'.$nhanvien->IDPB.'</th><th>'.$nhanvien->DiaChi.'</th></tr>';
                    }
                    echo '</table>';
                }
                elseif ($check == 2){
                    $nhanviengetby = $modelnhanvien->getAllNhanVienByTen($text);
                    echo '<table border = "1" width = "100%"';
                    echo '<caption style = "text-align: center;"> DU lieu bang nha su </caption>';
                
                    echo '<tr><th>IDNV</th><th>Họ Tên</th><th>IDPB</th><th>Địa chỉ</th></tr>';
                    
                    foreach($nhanviengetby as $nhanvien){
                        echo '<tr><th>'.$nhanvien->IDNV.'</th><th>'.$nhanvien->HoTen.'</th><th>'.$nhanvien->IDPB.'</th><th>'.$nhanvien->DiaChi.'</th></tr>';
                    }
                    echo '</table>';
                }
                elseif ($check == 3){
                    $nhanviengetby = $modelnhanvien->getAllNhanVienByIDPB($text);
                    echo '<table border = "1" width = "100%"';
                    echo '<caption style = "text-align: center;"> DU lieu bang nha su </caption>';
                
                    echo '<tr><th>IDNV</th><th>Họ Tên</th><th>IDPB</th><th>Địa chỉ</th></tr>';
                
                    foreach($nhanviengetby as $nhanvien){
                        echo '<tr><th>'.$nhanvien->IDNV.'</th><th>'.$nhanvien->HoTen.'</th><th>'.$nhanvien->IDPB.'</th><th>'.$nhanvien->DiaChi.'</th></tr>';
                    }
                    echo '</table>';
                }
                elseif($check == 4){
                    $nhanviengetby = $modelnhanvien->getAllNhanVienByDiaChi($text);
                    echo '<table border = "1" width = "100%"';
                    echo '<caption style = "text-align: center;"> DU lieu bang nha su </caption>';
                
                    echo '<tr><th>IDNV</th><th>Họ Tên</th><th>IDPB</th><th>Địa chỉ</th></tr>';
                
                    foreach($nhanviengetby as $nhanvien){
                        echo '<tr><th>'.$nhanvien->IDNV.'</th><th>'.$nhanvien->HoTen.'</th><th>'.$nhanvien->IDPB.'</th><th>'.$nhanvien->DiaChi.'</th></tr>';
                    }
                    echo '</table>';
                }
                else {
                    $nhanviengetby = $modelnhanvien->getAllNhanVien();
                    echo '<table border = "1" width = "100%"';
                    echo '<caption style = "text-align: center;"> DU lieu bang nha su </caption>';
                
                    echo '<tr><th>IDNV</th><th>Họ Tên</th><th>IDPB</th><th>Địa chỉ</th></tr>';
                
                    foreach($nhanviengetby as $nhanvien){
                        echo '<tr><th>'.$nhanvien->IDNV.'</th><th>'.$nhanvien->HoTen.'</th><th>'.$nhanvien->IDPB.'</th><th>'.$nhanvien->DiaChi.'</th></tr>';
                    }
                    echo '</table>';
                }
            
            }
            elseif(isset($_GET['timkiemnv'])){
                include_once("../../view/timkiem2.php");
            }
        }
    };

    $C_nhanvien = new Ctrl_Nhanvien();
    if(isset($_GET['timkiemnv'])){
        $C_nhanvien->timkiem();
    }
    else
    {
        $C_nhanvien->invoke();
    }
?>