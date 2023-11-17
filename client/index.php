
<?php
session_start();
if(!isset($_SESSION["user"])){
    echo "Ban khong co quyen truy cap trang user nay";
    die;
}
echo $_SESSION["user"];

if(isset($_POST["dangxuat"])){
    unset($_SESSION["user"]);
    header("Location: ../index.php");
}
include "./components/header.php";
if((isset($_GET['act']))&&($_GET['act']!="")){
    $act = $_GET['act'];
    switch($act) {
        default:
        include "./components/container.php";
        break;
    }
}else{
    include "./components/container.php";
}

include "./components/footer.php";
?>