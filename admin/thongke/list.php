<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.list {
    max-width: 1200px;
    margin: auto;
    margin-top: 100px;
}

.list h1 {
    font-size: 24px;
    margin: 10px 0px;
}
body{
    background-color:#f7fff2;
}
table {
    margin: 20px 0px;
    width: 1200px;
    border-collapse: collapse;
}

table tr td {
    padding: 10px;
}

table tr td a {
    text-decoration: none;
    color: #000;
    margin: 0px 10px;
}

.edit-delete {
    width: 300px;
    display: flex;
    align-items: center;
    border: none;
    border-bottom: 1px solid #000;
}

.edit {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: rgb(231, 231, 0);
    width: 120px;
    height: 30px;
}

.delete {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: rgb(255, 72, 0);
    color: #fff;
    width: 250px;
    height: 30px;
}

.function {
    width: 1200px;
    margin: auto;
    display: flex;
    justify-content: space-between;
}

.function a {
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid #000;
    width: 150px;
    height: 35px;
    text-decoration: none;
    color: #000;
}
</style>

<body>
    <div class="list">
        <h1>Thống kê</h1>
        <table border="1">
            <tr>
                <td style="width: 100px;">Id danh mục</td>
                <td style="width: 300px;">Tên danh mục</td>
                <td style="width: 200px;">Số lượng</td>
                <td style="width: 200px;">Giá cao nhất</td>
                <td style="width: 200px;">Giá thấp nhất</td>
                <td style="width: 200px;">Giá trung bình</td>

            </tr>
            <?php foreach ($listthongke as $thongke) {
                extract($thongke);
           echo ' <tr>
                <td>'.$madm.'</td>
                <td>'.$tendm.'</td>
                <td>'.$countsp.'</td>
                <td>'.$minprice.'.000đ</td>
                <td>'.$maxprice.'.000đ</td>
                <td>'.$avgprice.'.000đ</td>
            </tr>';
           } ?>
        </table>
    </div>
    <div class="function">
        <a href="index.php">Quay lại trang chủ</a>
        <a href="index.php?act=addsp">Mở lại tài khoản</a>
    </div>
</body>

</html>