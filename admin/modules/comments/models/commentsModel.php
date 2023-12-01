<?php
function getlistComments()
{
  return db_fetch_array("SELECT c.*, u.ten_dang_nhap FROM `binhluan` AS c INNER JOIN `khachhang` AS u ON c.ma_khach_hang = u.id");
}
function deleteCommentByID($id)
{
  return db_delete("binhluan", "`id` = '{$id}'");
}
function getCommentByID($id)
{
  return db_fetch_row("SELECT * FROM `binhluan` WHERE `id` = '{$id}'");
}
function updateCommentToDB($data, $id)
{
  return db_update("binhluan", $data, "`id` = '{$id}'");
}
