<?php
getHeader("layout/header.php");
require "modules/comments/controllers/commentsController.php";
$id = isset($_GET["id"]) ? intval($_GET["id"]) : "";
$commentInfo = getCommentByID($id);
if (isset($_POST['editComment'])) {
  updateComment($_POST['content'], $id);
  $commentInfo = getCommentByID($id);
}
?>
<!--Main layout-->
<div id="wrapper">
  <?php require "layout/sidebar.php"; ?>
  <main id="mainWrapper">
    <h2 class="mainWrapper-heading">Quản lý bình luận</h2>
    <div class="container pt-4" id="main-content">
      <div class="row">
        <div class="col-md-12 mb-3">
          <div class="card">
            <div class="card-header">
              <span><i class="bi bi-table me-2"></i></span> Sửa bình luận
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <div class="mx-auto container">
                  <form action="" id="edit-form" enctype="multipart/form-data" method="post">
                    <?php if (!empty($commentInfo)) {
                    ?>
                      <div class="mb-3">
                        <label for="content" class="form-label">Nội dung</label>
                        <input class="form-control ckeditor" id="content" name="content"><?php echo $commentInfo['noi_dung']; ?></input>
                        <?php echo form_error("content") ?>
                      </div>
                      <div class="mb-3">
                        <?php echo form_error("update") ?>
                        <?php echo notify("update") ?>
                      </div>
                      <div class="mb-3">
                        <input type="submit" value="Cập nhật" class="btn btn-primary" name="editComment">
                      </div>
                    <?php } ?>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>
<!--Main layout-->
<?php
getFooter("layout/footer.php")
?>