<?php

    include_once("E_nhanvien.php");
    class Model_Nhanvien {
        public function __construct() {}
        public function getAllNhanVien(){
            $link = mysqli_connect("localhost", "root", "") or die ("Khong the ket noi den co so du lieu");
            mysqli_select_db($link, "dulieu");
            $sql = "select * from nhanvien";
            $rs = mysqli_query($link, $sql);
            $i=0;
            $nhanviens = array();
            while($row = mysqli_fetch_array($rs)){
                $IDNV = $row['IDNV'];
                $HoTen = $row['HoTen'];
                $IDPB = $row['IDPB'];
                $DiaChi = $row['DiaChi'];
                $nhanviens[$i++] = new Entity_Nhanvien($IDNV, $HoTen, $IDPB, $DiaChi);
            }
            return $nhanviens;
        }
        public function getAllNVByPhongBan($id){
            $nhanviensByPB = array();
            $nhanviens = $this->getAllNhanVien();
            foreach($nhanviens as $nhanvien){
                if($nhanvien->IDPB == $id){
                    array_push($nhanviensByPB,$nhanvien);
                }
            }
            return $nhanviensByPB;
        }
        public function getAllNhanVienByID($idnv){
            $link = mysqli_connect("localhost", "root", "") or die ("Khong the ket noi den co so du lieu");
            mysqli_select_db($link, "dulieu");
            $sql = "select * from nhanvien where IDNV LIKE '%".$idnv."%'";
            $rs = mysqli_query($link, $sql);
            $i=0;
            $nhanviens = array();
            while($row = mysqli_fetch_array($rs)){
                $IDNV = $row['IDNV'];
                $HoTen = $row['HoTen'];
                $IDPB = $row['IDPB'];
                $DiaChi = $row['DiaChi'];
                $nhanviens[$i++] = new Entity_Nhanvien($IDNV, $HoTen, $IDPB, $DiaChi);
            }
            return $nhanviens;
        }

        public function getAllNhanVienByTen($ten){
            $link = mysqli_connect("localhost", "root", "") or die ("Khong the ket noi den co so du lieu");
            mysqli_select_db($link, "dulieu");
            $sql = "select * from nhanvien where HoTen LIKE '%".$ten."%'";
            $rs = mysqli_query($link, $sql);
            $i=0;
            $nhanviens = array();
            while($row = mysqli_fetch_array($rs)){
                $IDNV = $row['IDNV'];
                $HoTen = $row['HoTen'];
                $IDPB = $row['IDPB'];
                $DiaChi = $row['DiaChi'];
                $nhanviens[$i++] = new Entity_Nhanvien($IDNV, $HoTen, $IDPB, $DiaChi);
            }
            return $nhanviens;
        }
        public function getAllNhanVienByIDPB($idpb){
            $link = mysqli_connect("localhost", "root", "") or die ("Khong the ket noi den co so du lieu");
            mysqli_select_db($link, "dulieu");
            $sql = "select * from nhanvien where IDPB LIKE '%".$idpb."%'";
            $rs = mysqli_query($link, $sql);
            $i=0;
            $nhanviens = array();
            while($row = mysqli_fetch_array($rs)){
                $IDNV = $row['IDNV'];
                $HoTen = $row['HoTen'];
                $IDPB = $row['IDPB'];
                $DiaChi = $row['DiaChi'];
                $nhanviens[$i++] = new Entity_Nhanvien($IDNV, $HoTen, $IDPB, $DiaChi);
            }
            return $nhanviens;
        }
        public function getAllNhanVienByDiaChi($diachi){
            $link = mysqli_connect("localhost", "root", "") or die ("Khong the ket noi den co so du lieu");
            mysqli_select_db($link, "dulieu");
            $sql = "select * from nhanvien where DiaChi LIKE '%".$diachi."%'";
            $rs = mysqli_query($link, $sql);
            $i=0;
            $nhanviens = array();
            while($row = mysqli_fetch_array($rs)){
                $IDNV = $row['IDNV'];
                $HoTen = $row['HoTen'];
                $IDPB = $row['IDPB'];
                $DiaChi = $row['DiaChi'];
                $nhanviens[$i++] = new Entity_Nhanvien($IDNV, $HoTen, $IDPB, $DiaChi);
            }
            return $nhanviens;
        }
        public function getNhanvienDetail($id) {
            $link = mysqli_connect("localhost", "root", "") or die ("Khong the ket noi den co so du lieu");
            mysqli_select_db($link, "dulieu");
            $sql = "select * from nhanvien where IDNV = '".$id."'";
            $rs = mysqli_query($link, $sql);
            $row = mysqli_fetch_array($rs);
            $IDNV = $row['IDNV'];
            $HoTen = $row['HoTen'];
            $IDPB = $row['IDPB'];
            $DiaChi = $row['DiaChi'];
            $nhanvien = new Entity_Nhanvien($IDNV, $HoTen, $IDPB, $DiaChi);
            return $nhanvien;
        }
        public function AddNhanvien() {
            if(isset($_GET['IDNV']) and isset($_GET['HoTen']) and isset($_GET['IDPB']) and isset($_GET['DiaChi'])){
                $nhanvien = new Entity_Nhanvien($_GET['IDNV'], $_GET['HoTen'], $_GET['IDPB'], $_GET['DiaChi']);
                $link = mysqli_connect("localhost", "root", "") or die ("Khong the ket noi den co so du lieu");
                mysqli_select_db($link, "dulieu");
                $rs = mysqli_query($link, "INSERT INTO nhanvien (IDNV, HoTen, IDPB, DiaChi) VALUES ('$nhanvien->IDNV', '$nhanvien->HoTen', '$nhanvien->IDPB', '$nhanvien->DiaChi')");
            }
        }
        public function UpdateNhanvien($id, $HoTen, $IDPB, $DiaChi) {
            if(isset($_REQUEST['IDNV']) and isset($_REQUEST['HoTen']) and isset($_REQUEST['IDPB']) and isset($_REQUEST['DiaChi'])){
                    $bienketnoi = mysqli_connect('localhost', 'root', '') or die('could not connect:'.mysqli_error());
                    $db_selected = mysqli_select_db($bienketnoi, 'dulieu');
                    $rs = mysqli_query($bienketnoi,"UPDATE nhanvien SET HoTen = '$HoTen', IDPB = '$IDPB', DiaChi = '$DiaChi' WHERE IDNV = '$id' ");
            }
        }
        public function DeleteNhanvien($nvid){
            if(isset($_GET['ideletenv'])){
                $id = $nvid;
                $bienketnoi = mysqli_connect('localhost', 'root', '') or die('could not connect:'.mysqli_error());
                $db_selected = mysqli_select_db($bienketnoi, 'dulieu');
                $rs = mysqli_query($bienketnoi,"DELETE FROM nhanvien WHERE IDNV='$id'");
            }
        }
    }
?>