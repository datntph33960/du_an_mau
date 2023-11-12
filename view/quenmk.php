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
* {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    box-sizing: border-box;
}
body{
    background-color:#f7fff2;

}
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
</style>

<body>
    <div class="login">
        <h1>Quên mật khẩu</h1>
        <form action="" method="post" class="form">
            <div class="form-input">
                <p>Email khôi phục</p>
                <input type="text" name="email" />
            </div>
            <p><?php
        if(isset($thongbao)&&($thongbao!="")){
          echo $thongbao;
        }
        ?></p>
            <input type="submit" name="khoiphuc" value="Khôi phục" class="submit">
            <!-- <input type="reset" value="Nhập lại"> -->
            <div class="forgot-password">
                <a href="register.php">Đăng nhập</a>
            </div>
            <div class="register">

                <p>Bạn không có tài khoản ?<a href="register.php">Đăng
                        ký</a></p>
            </div>
        </form>
    </div>
</body>

</html>