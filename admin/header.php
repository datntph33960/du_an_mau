<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <title>Document</title>
</head>
<style>
    .header {
        display: flex;
        align-items: center;
        justify-content: space-around;
        background-color: #458a5b;
        position: fixed;
        z-index: 1;
        width: 100%;
        top: 0;
        height: 70px;
        transition: 0.5s;
        border-bottom: 1px solid black;
        
    }

    .giohang {
        font-size: 25px;
        color: #fff;
        margin-left: 20px;

    }

    .header img {
        width: auto;
        height: 60px;
        object-fit: cover;
    }

    ul {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    ul li {
        list-style: none;
    }

    ul li a {
        text-decoration: none;
        color: #000;
        font-size: 20px;
        padding: 0px 15px;
        text-decoration: none;
    }

    ul li a p {
        text-decoration: none;
        color: #000;
        font-size: 20px;
        padding: 0px 15px;
        text-decoration: none;
    }

    ul li a:hover {
        text-decoration: underline;
        text-decoration: none;
        color: #fff;
    }

    .user-search {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    form {
        position: relative;
    }

    .user-search i {
        font-size: 25px;
        color: #fff;
        margin-left: 20px;
    }

    .user-search p {
        float: right;
        margin-top: 5px;
    }

    .user-search a p {
        text-decoration: none;
        color: #000;
        margin-left: 5px;
    }

    .user-search .input {
        width: 200px;
        height: 35px;
        padding-left: 8px;
        font-size: 17px;
        border-radius: 10px;
    }

    .user-search .searchs {
        height: 35px;
        cursor: pointer;
        position: absolute;
        right: 0;
        background-color: #458a5b;
        border-radius: 10px;
        border: #fff solid;
    }

    .user-search .searchs:hover {
        color: #fff;
    }

    .user-search input:focus {
        outline: none;
    }
</style>


<body>

    <div class="header">
        <ul class="menu">
        <a href="../index.php"><img src="../Ảnh/logook.jpg"
                    alt="" /></a>
            <li><a href="../index.php">Trang chủ</a></li>
            <li><a href="index.php?act=listdm">Danh mục</a></li>
            <li><a href="index.php?act=listsp">Hàng hóa</a></li>
            <li><a href="index.php?act=listtk">Khách hàng</a></li>
            <li><a href="index.php?act=thongke">Thống kê</a></li>
            <li><a href="index.php?act=bieudo">Biểu đồ</a></li>
            <li><a href="index.php?act=listbill">Đơn hàng</a></li>


        </ul>
        <div class="user-search">
            <form action="index.php?act=sanpham" method="POST">
                <input type="text" class="input" name="kyw" placeholder="Tìm sản phẩm">
                <input type="submit" class="searchs" name="timkiem" value="Tìm kiếm">
            </form>
            <a href="../view/login.php"><i class="fa-solid fa-user"></i></a>
        </div>
    </div>
</body>

</html>