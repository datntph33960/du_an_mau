<?php
require "modules/cart/controllers/cartController.php";
if (isset($_POST['update-cart-btn'])) {
  $qty = $_POST['qty'];
  foreach ($qty as $id => $new_qty) {
    $_SESSION['cart']['buy'][$id]['qty'] = $new_qty;
    $_SESSION['cart']['buy'][$id]['sub_total'] = $new_qty * $_SESSION['cart']['buy'][$id]['price'];
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
