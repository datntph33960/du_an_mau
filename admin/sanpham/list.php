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
body{
    background-color:#f7fff2;
}
.list h1 {
    font-size: 24px;
    margin: 10px 0px;
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

table img {
    width: 200px;
    height: 150px;
    object-fit: cover;
}

.edit-delete {
    width: 200px;
    height: 200px;
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
    width: 120px;
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
        <h1>Danh sách sản phẩm</h1>
        <form action="index.php?act=listsp" method="post">
            <input type="text" name="kym">
            <select name="iddm" id="">
                <option value="0" selected>Tất cả</option>
                <?php foreach ($listdanhmuc as $danhmuc) { 
                    extract($danhmuc);
                echo '<option value="'.$id.'">'.$name.'</option>';
             } ?>
            </select>
            <input type="submit" name="listok" value="Lọc danh mục">
        </form>
        <table border="1">
            <tr>
                <td style="width: 100px;">Id</td>
                <td style="width: 200px;">Tên sản phẩm</td>
                <td style="width: 100px;">Giá</td>
                <td style="width: 200px;">Ảnh</td>
                <td style="width: 400px;">Mô tả</td>
                <td style="width: 50px;">Lượt xem</td>
                <td style="width: 50px;">Id Danh mục</td>
                <td style="width: 200px;">Chức năng</td>
            </tr>
            <?php foreach ($listsanpham as $sanpham) { 
                    extract($sanpham);
                    $sua = "index.php?act=editsp&id=".$id;
                    $xoa = "index.php?act=deletesp&id=".$id;
                echo '<tr>
                <td style="width: 100px;">'.$id.'</td>
                <td style="width: 200px;">'.$name.'</td>
                <td style="width: 100px;">'.$price.'</td>
                <td style="width: 200px;"><img src="../Ảnh/'.$img.'" alt=""></td>
                <td style="width: 400px;">'.$mota.'</td>
                <td style="width: 50px;">'.$luotxem.'</td>
                <td style="width: 50px;">'.$iddm.'</td>
                <td class="edit-delete"><a href="'.$sua.'" class="edit">
                        Sửa
                    </a>
                    <a href="'.$xoa.'"
                        class="delete">
                        Xoá
                    </a>
                </td>
            </tr>';
             } ?>
        </table>
    </div>
    <div class="function">
        <a href="index.php">Quay lại trang chủ</a>
        <a href="index.php?act=addsp">Thêm sản phẩm</a>
    </div>
</body>

</html>