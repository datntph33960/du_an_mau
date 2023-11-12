<style>
.content {
    display: flex;
    justify-content: space-between;
    max-width: 1200px;
    margin: auto;
    margin-top: 50px;
}

.all h1 {
    text-align: center;
    margin-top: 120px;
}

.content-product {
    display: flex;
    flex-wrap: wrap;
    max-width: 1200px;
}

.content-item {
    width: 265px;
    height: 350px;
    border: 1px solid rgba(0, 0, 0, 0.1);
    margin: 10px;
    margin-top: 25px;
    overflow: hidden;
    text-decoration: none;
    color: #000;
}

.content-item img {
    width: 265px;
    height: 270px;
    object-fit: cover;
}

.content-item-text {
    padding: 15px;
}

.content-item h2 {
    font-size: 19px;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    width: 100%;
}

.content-item-text b {
    color: #ff2525;
}

.box-content {
    display: flex;
    flex-direction: column;
    width: 300px;
    margin-top: 25px;
    background-color: #f3f3f3;
}

.box-content h1 {
    font-size: 27px;
    margin: 10px 0px;
}

.box-content li {
    list-style: none;
    padding: 10px;
    border-bottom: 1px solid #000;
}

.box-content li:hover {
    background-color: #000;
    cursor: pointer;
}

.box-content li:hover a {
    color: #fff;
}

.box-content li a {
    text-decoration: none;
    color: #000;
    font-size: 20px;
}
</style>
<div class="all">
    <h1>Sản phẩm <?=$kym?></h1>
</div>
<div class="content">
    <div class="content-product">
        <?php foreach ($listsanpham as $sanpham) { 
            $i = 0;
              if(($i == 2) || ($i == 5) || ($i == 8 || ($i == 11))){
                $mr = "";
             }else{
                $mr = "mr";
             }
            extract($sanpham);
                    $detail = "index.php?act=sanphamct&id=".$id;
        echo ' <a href="'.$detail.'" class="content-item">
            <img width="265px" src="./Ảnh/'.$img.'" alt="" />
            <div class="content-item-text">
                <h2>'.$name.'</h2>
                <b>'.$price.'.000đ</b>
            </div>
        </a>';
     } ?>
    </div>
    <div class="box-content">
        <h1>Danh mục</h1>
        <?php foreach ($dsdm as $danhmuc) {
            extract($danhmuc);
            $linkdm = "index.php?act=sanpham&iddm=".$id;
            echo '<li><a href="'.$linkdm.'">'.$name.'</a></li>';
         } ?>
    </div>
</div>