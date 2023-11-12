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
    body{
        background-color:#f7fff2;

    }
.product {
    display: flex;
    max-width: 1200px;
    margin: 20px auto;
    margin-top: 150px;
}

.product-img img {
    width: 350px;
}

.product-text {
    display: flex;
    flex-direction: column;
    margin-left: 30px;
}

.product-text h2 {
    font-size: 20px;
}

.product-text p {
    font-size: 20px;
    margin-top: 15px;
}

.product-text h3 {
    font-size: 20px;
    margin-top: 15px;
    font-weight: 100;
}

.product-text span {
    color: #ff2525;
}

.product-text del {
    color: #818181;
    margin-left: 8px;
}

.product-text .state span {
    color: #39db07;
}

.product-text .buy {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 200px;
    height: 50px;
    background-color: #ff2525;
    margin-top: 20px;
    font-size: 20px;
    text-transform: uppercase;
    color: #fff;
    text-decoration: none;
    border-radius: 3px;
}

.name-other-products h1 {
    text-align: center;
}

.row {
    width: 1200px;
    margin: auto;
}
</style>

<body>
    <div class="product">
        <div class="product-img">
            <img src="./Ảnh/<?=$img?>" alt="" />
        </div>
        <div class="product-text">
            <h2>Mã hàng: <?=$id?></h2>
            <h2><?=$name?></h2>
            <p>Giá: <span><?=$price?>.000đ</span></p>
            <h3>Phí vận chuyển: Miễn Phí</h3>
            <div class="state">
                <p>Tình trạng : <span>Còn hàng</span></p>
            </div>
            <p>Mô tả:
                <?=$mota?>
            </p>
            <a href="" class="buy">Mua ngay</a>
        </div>
    </div>
    <script>
    </script>
    
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</html>