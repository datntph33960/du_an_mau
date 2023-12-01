<?php
require "modules/comments/controllers/commentsController.php";
$commentID = isset($_GET['id']) ? intval($_GET['id']) : 0;
deleteCommentByID($commentID);
?>
<h1>Xoá thành công bình luận có id là <?php echo $commentID ?></h1>