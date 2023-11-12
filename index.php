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
include "./model/pdo.php";
include "./model/taikhoan.php";
include "./admin/sanpham.php";
include "./admin/danhmuc.php";
include "view/header.php";
$dsdm = loadAllDm();
if((isset($_GET['act']))&&($_GET['act']!="")){
    $act = $_GET['act'];
    switch($act) {
        case "sanpham":
            if(isset($_POST['kyw']) && ($_POST['kyw'] != "")){
                $kym = $_POST['kyw'];
            } else {
                $kym = "";
            }
            if(isset($_GET['iddm']) && ($_GET['iddm']) > 0){
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadAllSp("",$iddm);
            $listsanpham = loadAllSp($kym,$iddm);
            $listdanhmuc = loadAllDm();
            include "view/sanpham.php";
            break;
        case "sanphamct":
            if(isset($_GET['id'])&&$_GET['id']>0){
                $sanpham = loadOneSp($_GET['id']);
            }
            include "view/chitietsanpham.php";
            break;
        case "login":
            if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                $user = $_POST['username'];
                $pass = $_POST['password'];
                $checkuser = checkuser($user,$pass);
                if(is_array($checkuser)){
                    $_SESSION['user'] = $checkuser;
                    header('location: index.php');
                }else{
                    $thongbao="tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký";
                }
            }
            include "view/login.php";
            break;
        case "register":
            if(isset($_POST['dangky']) && $_POST['dangky']){
                $user = $_POST['username'];
                $pass = $_POST['password'];
                $email = $_POST['email'];
                $sdt = $_POST['tel'];
                $address = $_POST['address'];
                $role = $_POST['role'];
                insert_taikhoan($user,$pass,$email,$address,$tel,$role);
                
            }
            $listdanhmuc = loadAllDm();
            include "./view/register.php";
            break;
        case'edittk':
            if(isset($_POST['capnhap'])&&($_POST['capnhap'])){
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                $email=$_POST['email'];
                $address=$_POST['address'];
                $tel=$_POST['tel'];
                $id=$_POST['id'];
                update_taikhoan($id, $user, $pass, $email, $address, $tel);
                $_SESSION['user']=checkuser($user, $pass);
                header('location: index.php?act=edit_taikhoan');
            }
                include "view/edittk.php";
                break;
        case'quenmk':
            if(isset($_POST['khoiphuc'])&&($_POST['khoiphuc'])){
                $email=$_POST['email'];
                $checkemail=checkemail($email);
                if(is_array($checkemail)){
                $thongbao="mật khẩu của bạn là : ".$checkemail['pass'];
                }else{
                $thongbao="email này không tồn tại !";
                }         
            }
                include "view/quenmk.php";
                break;
        default:
        if(isset($_POST['listok']) && ($_POST['listok'])){
            $kym = $_POST['kym'];
            $iddm = $_POST['iddm'];
        } else {
            $kym = "";
            $iddm = 0;
        };
        $listdanhmuc = loadAllDm();
        $listsanpham = loadAllSp($kym,$iddm);
            include "view/home.php";
            break;
    }
}else{
    if(isset($_POST['listok']) && ($_POST['listok'])){
        $kym = $_POST['kym'];
        $iddm = $_POST['iddm'];
    } else {
        $kym = "";
        $iddm = 0;
    };
    $listdanhmuc = loadAllDm();
    $listsanpham = loadAllSp($kym,$iddm);
    include "view/home.php";
}

include "view/footer.php";
?>