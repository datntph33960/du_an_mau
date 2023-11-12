<?php
function loadAllThongKe(){
    $sql = "SELECT danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price)
    as minprice,max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice from sanpham LEFT JOIN danhmuc 
    ON danhmuc.id=sanpham.iddm group by danhmuc.id order by danhmuc.id DESC";
    $listthongke = pdo_query($sql);
    return $listthongke;
} 
?>