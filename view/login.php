<?php
include "./model/connect.php";
session_start();
if(isset($_POST["dangnhap"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    if($username == "admin" && $password == "admin"){
        $_SESSION["admin"] = $username;
        header("Location: ./admin/index.php");
    } 
}
if(isset($_SESSION["admin"])){
    header("Location: ./admin/index.php");
} 
if(isset($_SESSION["user"])){
    header("Location: ./client/index.php");
} 

ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="./CSS/login.css">
    <title>Document</title>
</head>
<style>
.login {
    max-width: 400px;
    margin: auto;
    margin-top: 150px;
    margin-bottom: 150px;
}

.login h1 {
    text-align: center;
    font-size: 26px;
}

form {
    display: flex;
    flex-direction: column;
    justify-content: center;
}

form .form-input {
    margin: 10px 0px;
    font-size: 20px;
}

form .form-input input {
    width: 400px;
    height: 30px;
    font-size: 18px;
}

form .submit {
    width: 400px;
    height: 35px;
    font-size: 18px;
    margin: auto;
    margin-top: 20px;
    background-color: #478c5d;
    color: #fff;
    outline: none;
    border: none;
    border-radius: 5px;
}

form .forgot-password a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 400px;
    height: 35px;
    margin: auto;
    margin-top: 15px;
    background-color: #478c5d;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
}

form .register {
    text-align: center;
    margin-top: 20px;
}
body{
    background-color:#f7fff2;

}
</style>

<body>
    <div class="login">
        <h1>Đăng nhập</h1>
        <form action="" method="post" class="form">
            <div class="form-input">
                <p>Tài khoản</p>
                <input type="text" name="username" />
            </div>
            <div class="form-input">
                <p>Mật khẩu</p>
                <input type="password" name="password" />
                <?php
       
        ob_end_flush();
        ?>
            </div>
            <input type="submit" name="dangnhap" value="Đăng nhập" class="submit">
            <div class="forgot-password">
                <a href="index.php?act=quenmk">Quên mật khẩu</a>
            </div>
            <div class="forgot-password">
                <a href="index.php?act=quenmk">Đổi mật khẩu</a>
            </div>
            <div class="register">
                <p>Bạn không có tài khoản ?<a href="index.php?act=register">Đăng ký</a></p>
                <p>Bạn không có tài khoản ?<a href="index.php?act=register">Đăng ký</a></p>
            </div>
        </form>
    </div>
</body>

</html>