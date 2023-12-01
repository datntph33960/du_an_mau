<?php
$productID = isset($_GET['id']) ? (int)$_GET['id'] : "";
if (isset($_SESSION['cart'])) {
  if (!empty($productID)) {
    unset($_SESSION['cart']['buy'][$productID]);
    updateInfoCart();
  } else {
    unset($_SESSION['cart']);
  }
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
