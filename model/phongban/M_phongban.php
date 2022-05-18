<?php

    include_once("E_phongban.php");
    class Model_Phongban {
        public function __construct() {}
        public function getAllPhongBan(){
            $link = mysqli_connect("localhost", "root", "") or die ("Khong the ket noi den co so du lieu");
            mysqli_select_db($link, "dulieu");
            $sql = "select * from phongban";
            $rs = mysqli_query($link, $sql);
            $i=0;
            $phongbans = array();
            while($row = mysqli_fetch_array($rs)){
                $IDPB = $row['IDPB'];
                $Tenpb = $row['Tenpb'];
                $MoTa = $row['MoTa'];
                $phongbans[$i++] = new Entity_Phongban($IDPB, $Tenpb, $MoTa);
            }
            return $phongbans;
        }
        public function getPhongBanDetail($id) {
            $link = mysqli_connect("localhost", "root", "") or die ("Khong the ket noi den co so du lieu");
            mysqli_select_db($link, "dulieu");
            $sql = "select * from phongban where IDPB = '".$id."'";
            $rs = mysqli_query($link, $sql);
            $row = mysqli_fetch_array($rs);
            // $phongbans  = $this->getAllPhongBan();
            // $phongban = array_search($phongbans, $id);
            $IDPB = $row['IDPB'];
            $Tenpb = $row['Tenpb'];
            $MoTa = $row['MoTa'];
            $phongban = new Entity_Phongban($IDPB, $Tenpb, $MoTa);
            return $phongban;
        }
        public function AddPhongban() {
            if(isset($_GET['IDPB']) and isset($_GET['Tenpb']) and isset($_GET['MoTa'])){
                $phongban = new Entity_Phongban($_GET['IDPB'], $_GET['Tenpb'], $_GET['MoTa']);
                $link = mysqli_connect("localhost", "root", "") or die ("Khong the ket noi den co so du lieu");
                mysqli_select_db($link, "dulieu");
                $rs = mysqli_query($link, "INSERT INTO phongban (IDPB, Tenpb, MoTa) VALUES ('$phongban->IDPB', '$phongban->Tenpb', '$phongban->MoTa')");
            }
        }
        public function UpdatePhongBan($IDPB, $Tenpb, $MoTa) {
            if(isset($_REQUEST['IDPB']) and isset($_REQUEST['Tenpb']) and isset($_REQUEST['MoTa'])){
                    $bienketnoi = mysqli_connect('localhost', 'root', '') or die('could not connect:'.mysqli_error());
                    $db_selected = mysqli_select_db($bienketnoi, 'dulieu');
                    $rs = mysqli_query($bienketnoi,"UPDATE phongban SET Tenpb = '$Tenpb', MoTa = '$MoTa' WHERE IDPB = '$IDPB' ");
            }
        }
        public function DeletePhongBan($pbid){
            if(isset($_GET['iddelpb'])){
                $id = $pbid;
                $bienketnoi = mysqli_connect('localhost', 'root', '') or die('could not connect:'.mysqli_error());
                $db_selected = mysqli_select_db($bienketnoi, 'dulieu');
                $rs = mysqli_query($bienketnoi,"DELETE FROM phongban WHERE IDPB='$id'");
            }
        }
        public function getAllPhongBanByID($idpb){
            $link = mysqli_connect("localhost", "root", "") or die ("Khong the ket noi den co so du lieu");
            mysqli_select_db($link, "dulieu");
            $sql = "select * from phongban where IDPB LIKE '%".$idpb."%'";
            $rs = mysqli_query($link, $sql);
            $i=0;
            $phongbans = array();
            while($row = mysqli_fetch_array($rs)){
                $IDPB = $row['IDPB'];
                $Tenpb = $row['Tenpb'];
                $MoTa = $row['MoTa'];
                $phongbans[$i++] = new Entity_Phongban($IDPB, $Tenpb, $MoTa);
            }
            return $phongbans;
        }

        public function getAllPhongBanByTen($ten){
            $link = mysqli_connect("localhost", "root", "") or die ("Khong the ket noi den co so du lieu");
            mysqli_select_db($link, "dulieu");
            $sql = "select * from phongban where Tenpb LIKE '%".$ten."%'";
            $rs = mysqli_query($link, $sql);
            $i=0;
            $phongbans = array();
            while($row = mysqli_fetch_array($rs)){
                $IDPB = $row['IDPB'];
                $Tenpb = $row['Tenpb'];
                $MoTa = $row['MoTa'];
                $phongbans[$i++] = new Entity_Phongban($IDPB, $Tenpb, $MoTa);
            }
            return $phongbans;
        }
        public function getAllPhongBanByMoTa($motapb){
            $link = mysqli_connect("localhost", "root", "") or die ("Khong the ket noi den co so du lieu");
            mysqli_select_db($link, "dulieu");
            $sql = "select * from phongban where MoTa LIKE '%".$motapb."%'";
            $rs = mysqli_query($link, $sql);
            $i=0;
            $phongbans = array();
            while($row = mysqli_fetch_array($rs)){
                $IDPB = $row['IDPB'];
                $Tenpb = $row['Tenpb'];
                $MoTa = $row['MoTa'];
                $phongbans[$i++] = new Entity_Phongban($IDPB, $Tenpb, $MoTa);
            }
            return $phongbans;
        }
    }
?>