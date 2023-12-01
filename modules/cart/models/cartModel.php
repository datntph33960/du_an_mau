<?php
function laysanpham($id)
{
  $item = db_fetch_row("SELECT * FROM `sanpham` WHERE `id` = '{$id}'");
  $item['urlAddToCart'] = "?mod=cart&act=add&id={$id}";
  $item['urlDetail'] = "?mod=products&act=detail&id={$id}";
  return $item;
}
