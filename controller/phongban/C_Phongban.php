<?php
    include_once("../../model/phongban/M_phongban.php");
    include_once("../../model/nhanvien/M_nhanvien.php");
    class Ctrl_Phongban{
        public function invoke()
        {
            if (isset($_GET['iddelpb'])){
                $modelPhongban = new Model_Phongban();
                $modelPhongban->DeletePhongBan($_GET['iddelpb']);
                header("Location:C_Phongban.php");
            }
            elseif(isset($_GET['ideditpb'])){
                echo 'cap nhat';
                $modelPhongban = new Model_Phongban();
                $phongbans = $modelPhongban->getPhongBanDetail($_GET['ideditpb']);
                $id = $phongbans->IDPB;
                $tenpb = $phongbans->Tenpb;
                $mota = $phongbans->MoTa;
                include_once("../../view/updatePhongban.php");
                if(isset($_REQUEST['update'] )){
                    if($_REQUEST['IDPB'] !='' and $_REQUEST['Tenpb'] !='' and $_REQUEST['MoTa'] !=''){
                        $modelPhongban->UpdatePhongBan($id, $_REQUEST['Tenpb'], $_REQUEST['MoTa']);
                        header("Location:C_Phongban.php");
                    }
                }
            }
            elseif(isset($_GET['pb_mod1'])){
                $modelPhongban = new Model_Phongban();
                $phongbans = $modelPhongban->getAllPhongBan();
                @$LastID = end(array_column($phongbans,'IDPB'));
                $str = (int)substr($LastID, -2) + 1;
                $newID = '';
                if($str <10){
                    $newID = 'PB0'.$str;
                }
                else 
                {
                    $newID ='PB'.$str;
                }
                include_once("../../view/AddPhongban.php");
            }
            elseif (isset($_GET['idpbFromNV'])){
                echo "get all nhan vien";
                $modelPhongban = new Model_Phongban();
                $phongbans = $modelPhongban->getAllPhongBan();
                include_once("../../view/xemthongtinpb.php");
            }
            elseif (isset($_GET['idpb'])) {
                $modelnhanvien = new Model_Nhanvien();
                $nhanviens = $modelnhanvien->getAllNVByPhongBan($_GET['idpb']);
                include_once("../../view/xemthongtinnvpb.php");
            }
            else
            {
                $modelPhongban = new Model_Phongban();
                $phongbans = $modelPhongban->getAllPhongBan();
                include_once("../../view/xemthongtinpb.php");
                if(isset($_GET['IDPB']) and isset($_GET['Tenpb']) and isset($_GET['MoTa']) and isset($_GET['Add'] )){
                    if($_GET['IDPB'] !='' and $_GET['Tenpb'] !='' and $_GET['MoTa'] !=''){
                        $modelPhongban->AddPhongban();
                        header("Location:C_Phongban.php");
                    }
                }
            }
        }
        public function timkiem()
        {
            if (isset($_GET['view'])){
                $modelPhongban = new Model_Phongban();
                $check = @$_GET['C1'];
                $text = @$_GET['S1'];
                if($check == 1){
                    $phongbansgetby = $modelPhongban->getAllPhongBanByID($text);
                    echo '<table border = "1" width = "100%"';
                    echo '<caption style = "text-align: center;"> DU lieu bang nha su </caption>';
                
                    echo '<tr><th>IDPB</th><th>Tenpb</th><th>moTa</th></tr>';
                
                    foreach($phongbansgetby as $phongban){
                        echo '<tr><th>'.$phongban->IDPB.'</th><th>'.$phongban->Tenpb.'</th><th>'.$phongban->MoTa.'</th></tr>';
                    }
                    echo '</table>';
                }
                elseif ($check == 2){
                    $phongbansgetby = $modelPhongban->getAllPhongBanByTen($text);
                    echo '<table border = "1" width = "100%"';
                    echo '<caption style = "text-align: center;"> DU lieu bang nha su </caption>';
                
                    echo '<tr><th>IDPB</th><th>Tenpb</th><th>moTa</th></tr>';
                    
                    foreach($phongbansgetby as $phongban){
                        echo '<tr><th>'.$phongban->IDPB.'</th><th>'.$phongban->Tenpb.'</th><th>'.$phongban->MoTa.'</th></tr>';
                    }
                    echo '</table>';
                }
                elseif ($check == 3){
                    $phongbansgetby = $modelPhongban->getAllPhongBanByMoTa($text);
                    echo '<table border = "1" width = "100%"';
                    echo '<caption style = "text-align: center;"> DU lieu bang nha su </caption>';
                
                    echo '<tr><th>IDPB</th><th>Tenpb</th><th>moTa</th></tr>';
                
                    foreach($phongbansgetby as $phongban){
                        echo '<tr><th>'.$phongban->IDPB.'</th><th>'.$phongban->Tenpb.'</th><th>'.$phongban->MoTa.'</th></tr>';
                    }
                    echo '</table>';
                }
                else {
                    $phongbansgetby = $modelPhongban->getAllPhongBan();
                    echo '<table border = "1" width = "100%"';
                    echo '<caption style = "text-align: center;"> DU lieu bang nha su </caption>';
                
                    echo '<tr><th>IDPB</th><th>Tenpb</th><th>moTa</th></tr>';
                
                    foreach($phongbansgetby as $phongban){
                        echo '<tr><th>'.$phongban->IDPB.'</th><th>'.$phongban->Tenpb.'</th><th>'.$phongban->MoTa.'</th></tr>';
                    }
                    echo '</table>';
                }
            
            }
            elseif(isset($_GET['timkiempb'])){
                include_once("../../view/timkiem.php");
            }
        }
    };

    $C_phongban = new Ctrl_Phongban();
    if(isset($_GET['timkiempb'])){
        $C_phongban->timkiem();
    }
    else{
        $C_phongban->invoke();
    }
?>