<style>
* {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    box-sizing: border-box;
}
</style>
<?php
session_start();
if(!isset($_SESSION["admin"])){
   echo "Ban khong co quyen truy cap trang nay";
   die;
}
echo $_SESSION["admin"];
if(isset($_POST["dangxuat"])){
    unset($_SESSION["admin"]);
    header("Location: ../index.php");
}
include "header.php";
include "../model/pdo.php";
include "../model/cart.php";

include "../model/thongke.php";
include "../model/taikhoan.php";
include "sanpham.php";
include "danhmuc.php";
include "khachhang.php";
if(isset($_GET['act']) && $_GET['act'] != ""){
    $act = $_GET['act'];
    switch ($act) {
        
        case "editsp":
            if(isset($_GET['id'])&&$_GET['id']>0){
                $sanpham = loadOneSp($_GET['id']);
            }
            if(isset($_POST['sua']) && $_POST['sua']){
                $id = $_POST['id'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $mota = $_POST['mota'];
                $luotxem = $_POST['luotxem'];
                $iddm = $_POST['iddm'];
                editSp($id,$name,$price,$mota,$luotxem,$iddm);
            }
            $listdanhmuc = loadAllDm();
            include "sanpham/edit.php";
            break;
        case "addsp":
            if(isset($_POST['them']) && $_POST['them']){
                $id = $_POST['id'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $mota = $_POST['mota'];
                $luotxem = $_POST['luotxem'];
                $iddm = $_POST['iddm'];
                $target = "../Ảnh/";
                $img = $_FILES["img"]["name"];
                $target_file = $target.$img;
                move_uploaded_file($_FILES["img"]["tmp_name"],$target_file);
                addSp($name,$price,$img,$mota,$luotxem,$iddm);
            }
            $listdanhmuc = loadAllDm();
            include "sanpham/add.php";
            break;
        case "deletesp":
            if(isset($_GET['id']) && ($_GET['id'] > 0)){
                deleteSp($_GET['id']);
            }
            $listsanpham = loadAllSp("",0);
            include "sanpham/list.php";
            break;
        case "listsp":
            if(isset($_POST['listok']) && ($_POST['listok'])){
                $kym = $_POST['kym'];
                $iddm = $_POST['iddm'];
            } else {
                $kym = "";
                $iddm = 0;
            };
            $listdanhmuc = loadAllDm();
            $listsanpham = loadAllSp($kym,$iddm);
            include "sanpham/list.php";
            break;
        case "editdm":
            if(isset($_GET['id'])&&$_GET['id']>0){
                $danhmuc = loadOneDm($_GET['id']);
            }
            if(isset($_POST['sua']) && $_POST['sua']){
                $id = $_POST['id'];
                $name = $_POST['name'];
                editDm($id,$name);
            }
            include "danhmuc/edit.php";
            break;
        case "adddm":
            if(isset($_POST['them']) && $_POST['them']){
                $id = $_POST['id'];
                $name = $_POST['name'];
                addDm($name);
            }
            include "danhmuc/add.php";
            break;
        case "deletedm":
            if(isset($_GET['id']) && ($_GET['id'] > 0)){
                deleteDm($_GET['id']);
            }
            $listdanhmuc = loadAllDm("",0);
            include "danhmuc/list.php";
            break;
        case "listdm":
            $listdanhmuc = loadAllDm();
            include "danhmuc/list.php";
            break;
        case "listtk":
            $listtk = loadAllTk(); 
            include "taikhoan/list.php";
            break;
        case "deletetk":
            if(isset($_GET['id']) && ($_GET['id'] > 0)){
                delete_taikhoan($_GET['id']);
            }
            $listtk = loadAllTk("",0);
            include "taikhoan/list.php";
            break;
        case "thongke": 
            $listthongke = loadAllThongKe();
            include "thongke/list.php";
            break;
        case "bieudo":
            $listthongke = loadAllThongKe();
            include "thongke/bieudo.php";
            break;
        default:
            include "home.php";
            break;
    } 
} else {
    include "home.php";
}
include "footer.php";
?>