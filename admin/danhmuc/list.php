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

.edit-delete {
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

.function input {
    width: 150px;
    height: 35px;
    font-size: 17px;
    background: transparent;
    cursor: pointer;
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
        <h1>Danh sách danh mục</h1>
        <table border="1">
            <tr>
                <td style="width: 100px;">Id</td>
                <td style="width: 700px;">Tên danh mục</td>
                <td style="width: 200px;">Chức năng</td>
            </tr>
            <?php foreach ($listdanhmuc as $danhmuc) { 
                    extract($danhmuc);
                    $sua = "index.php?act=editdm&id=".$id;
                    $xoa = "index.php?act=deletedm&id=".$id;
                echo '<tr>
                <td style="width: 200px;">'.$id.'</td>
                <td style="width: 500px;">'.$name.'</td>
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
        <div class="function">
            <a href="index.php">Quay lại trang chủ</a>
            <a href="index.php?act=adddm">Thêm danh mục</a>
        </div>
    </div>
</body>


</html>