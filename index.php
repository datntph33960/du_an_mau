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
include "./model/cart.php";

include "./model/taikhoan.php";
include "./admin/sanpham.php";
include "./admin/danhmuc.php";
include "view/header.php";
if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];
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
        case 'addtocart':
                if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    $img=$_POST['img'];
                    $price=$_POST['price'];
                    $soluong=1;
                    $thanhtien=$soluong * $price;
                    $spadd=[$id,$name,$img,$price,$soluong,$thanhtien];
                    array_push($_SESSION['mycart'],$spadd);
                    
                }
                include "view/cart/viewcart.php";
                    break;
        case 'delcart':
                if(isset($_GET['idcart'])){
                    array_splice($_SESSION['mycart'],$_GET['idcart'],1);
                }else{
                    $_SESSION['mycart']=[];
                }
                header('Location: index.php?act=addtocart');
                    break;   
         case "bill":
                        include "./view/cart/bill.php";
                        break;
        case "mybill":
                        $listbill=loadall_bill($_SESSION['user']['id']);
                        $hienthi = ht_donhang();
                        include "./view/cart/mybill.php";
                        break;    
         case "billcomfirm":
                        if(isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
                            if(isset($_SESSION['user'])) $iduser=$_SESSION['user']['id'];
                            else $id=0;
                            $name = $_POST['name'];
                            $address = $_POST['address'];
                            $email = $_POST['email'];
                            $tel = $_POST['tel'];
                            $pttt = $_POST['pttt'];
                            $ngaydathang = date('h:i:sa d/m/Y');
                            $tongdonhang=tongdonhang();
                            $idbill=insert_bill($iduser,$name,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang);
                                foreach($_SESSION['mycart'] as $cart){
                                    insert_cart($_SESSION['user']['id'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
                                }
                        }
                        $bill=loadone_bill($idbill);
                        $listbill=loadall_cart($idbill);
                        unset($_SESSION['mycart']);
                        include "./view/cart/billcomfirm.php";
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