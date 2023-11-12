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
body{
    background-color:#f7fff2;

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
        <h1>Đăng ký tài khoản</h1>
        <form action="" method="post" class="form">
            <div class="form-input">
                <p>Tài khoản</p>
                <input type="text" name="username" />
            </div>
            <div class="form-input">
                <p>Email</p>
                <input type="text" name="email" />
            </div>
            <div class="form-input">
                <p>SĐT</p>
                <input type="text" name="tel" />
            </div>
            <div class="form-input">
                <p>Địa chỉ</p>
                <input type="text" name="address" />
            </div>
            <div class="form-input">
                <p>Giới tính</p>
                <select name="role" id="">
                    <option value="1">Nam</option>
                    <option value="0">Nữ</option>
                </select>
            </div>
            <div class="form-input">
                <p>Nhập mật khẩu</p>
                <input type="password" name="password" />
            </div>
            <input type="submit" name="dangky" value="Đăng ký" class="submit">
            <p style="margin-top: 10px;"><?php echo "Đăng ký thành công" ?></p>
            <div class="forgot-password">
                <a href="index.php?act=login">Đăng nhập</a>
            </div>
            <div class="forgot-password">
                <a href="login.php">Đổi mật khẩu</a>
            </div>
        </form>
    </div>
</body>

</html>