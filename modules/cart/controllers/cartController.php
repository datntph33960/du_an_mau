<?php
function getTotal()
{
  if (!empty($_SESSION['cart'])) {
    return $_SESSION['cart']['info']['total'];
  }
  return false;
}
