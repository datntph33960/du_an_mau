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
        <h1>Danh sách tài khoản</h1>
        <table border="1">
            <tr>
                <td style="width: 100px;">Id</td>
                <td style="width: 300px;">Tên tài khoản</td>
                <td style="width: 200px;">Mật khẩu</td>
                <td style="width: 200px;">Email</td>
                <td style="width: 200px;">Địa chỉ</td>
                <td style="width: 200px;">SĐT</td>
                <td style="width: 100px;">Role</td>
                <td style="width: 400px;">Chức năng</td>

            </tr>
            <?php foreach ($listtk as $tk) {
                extract($tk);
                $xoa = "index.php?act=deletetk&id=".$id;
           echo ' <tr>
                <td>'.$id.'</td>
                <td>'.$user.'</td>
                <td>'.$pass.'</td>
                <td>'.$email.'</td>
                <td>'.$address.'</td>
                <td>'.$tel.'</td>
                <td>'.$role.'</td>
                <td class="edit-delete"><a href="edit.php?id=" class="edit">
                        Sửa
                    </a>
                    <a href="'.$xoa.'" class="delete">
                        Khóa tài khoản
                    </a>
                </td>
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