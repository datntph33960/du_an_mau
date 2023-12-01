<?php
function getListOrders()
{
  $list = db_fetch_array("SELECT * FROM `donhang`");
  return $list;
}
function getOrderByID($order_id)
{
  return db_fetch_row("SELECT * FROM `donhang` WHERE `id` = '{$order_id}'");
}
function getOrderDetailByID($id)
{
  $list = db_fetch_row("SELECT od.*, p.ten, p.hinh_anh FROM `donhangchitiet` AS od INNER JOIN `sanpham` AS p ON od.ma_san_pham = p.id WHERE od.ma_don_hang = '{$id}'");
  return $list;
}
function updateOrderToDB($data, $id)
{
  return db_update("donhang", $data, "`id` = '{$id}'");
}
