<?php
require "modules/comments/models/commentsModel.php";
function updateComment($content, $id)
{
  global $error, $notify;
  if (isset($_POST['editComment'])) {
    if (empty($content)) {
      $error['content'] = "Không được để trống nội dung";
    } else {
      $content = htmlspecialchars($content);
    }
    if (empty($error)) {
      $data = [
        'id' => $id,
        'noi_dung' => $content,
      ];
      updateCommentToDB($data, $id);
      $notify['update'] = "Cập nhật thành công";
    } else {
      $error['update'] = "Cập nhật thất bại";
    }
  }
}
