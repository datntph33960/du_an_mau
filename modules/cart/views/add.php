<?php
require "modules/cart/models/cartModel.php";
if (isset($_GET['id'])) {
  $productID = (int)$_GET['id'];
  $productInfo = laysanpham($productID);
  $qty = 1;
  if (isset($_SESSION['cart']['buy']) && array_key_exists($productID, $_SESSION['cart']['buy'])) {
    $qty = $_SESSION['cart']['buy'][$productID]['qty'] + 1;
  }
  $_SESSION['cart']['buy'][$productID] = array(
    'id' => $productID,
    'name' => $productInfo['ten'],
    'product_category' => $productInfo['ma_danh_muc'],
    'description' =>  $productInfo['mo_ta'],
    'price' =>  $productInfo['gia'],
    'image' =>  $productInfo['hinh_anh'],
    'qty' => $qty,
    'sub_total' => $qty * $productInfo['gia'],
  );
  foreach ($_SESSION['cart']['buy'] as &$item) {
    $item['deleteCart'] = "?mod=cart&act=delete&id={$item['id']}";
  }
  updateInfoCart();
}
function updateInfoCart()
{
  if (empty($_SESSION['cart'])) return false;
  $num_order = 0;
  $total = 0;
  foreach ($_SESSION['cart']['buy'] as $item) {
    $num_order += $item['qty'];
    $total += $item['sub_total'];
  };
  $_SESSION['cart']['info'] = array(
    'num_order' => $num_order,
    'total' => $total
  );
}
redirect_to("?mod=cart&act=main");
