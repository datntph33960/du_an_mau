<?php
if(is_array($sanpham)){
    extract($sanpham);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.row {
    max-width: 1200px;
    margin: auto;
    margin-top: 100px;
}

.font-title {
    margin: 10px 0px;
}

.form-content {
    margin: 10px 0px;
}

.row-input {
    margin: 17px 0px;
}

.row-input input {
    width: 1200px;
    height: 35px;
    padding-left: 8px;
    font-size: 17px;
}

.row-input select {
    font-size: 18px;
    width: 200px;
    height: 35px;
}

.row-input img {
    width: 250px;
}

.row-btn input {
    width: 180px;
    height: 40px;
    font-size: 19px;
    margin: 15px 0px;
    background-color: #000;
    color: #fff;
    border: none;
    outline: none;
    border-radius: 5px;
    cursor: pointer;
}
</style>

<body>

    <div class="row">
        <div class="font-title">
            <h1>Sửa sản phẩm</h1>
        </div>
        <div class="form-content">
            <form action="index.php?act=editsp" method="POST" enctype="multipart/form-data">
                <div class="row-input">
                    <label> Mã sản phẩm </label> <br>
                    <input type="text" name="id" value="<?=$id?>">
                </div>
                <div class="row-input">
                    <label>Tên Sản phẩm </label> <br>
                    <input type="text" name="name" value="<?=$name?>">
                </div>
                <div class="row-input">
                    <label>Giá </label> <br>
                    <input type="text" name="price" value="<?=$price?>">
                </div>
                <div class="row-input">
                    <label>Ảnh </label> <br>
                    <img src=".././Ảnh/<?=$img?>" alt="">
                </div>
                <div class="row-input">
                    <label>Mô tả </label> <br>
                    <input type="text" name="mota" value="<?=$mota?>">
                </div>
                <div class="row-input">
                    <label>Lượt xem </label> <br>
                    <input type="text" name="luotxem" value="<?=$luotxem?>">
                </div>
                <div class="row-input">
                    <label>Danh mục </label> <br>
                    <select name="iddm" id="">
                        <?php foreach ($listdanhmuc as $danhmuc) { 
                    extract($danhmuc);
                    if($iddm === $id){
                        echo '<option value="'.$id.'" selected>'.$name.'</option>';
                    } else {
                        echo '<option value="'.$id.'">'.$name.'</option>';

                    }
             } ?>
                    </select>
                </div>
                <div class="row-btn">
                    <input type="submit" name="sua" value="Sửa">
                </div>
            </form>
        </div>
    </div>
</body>

</html>

<!-- END HEADER -->