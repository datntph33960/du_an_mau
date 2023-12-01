<?php
getHeader("layout/header.php");
require "modules/comments/controllers/commentsController.php";
$listComments = getlistComments();
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
              <span><i class="bi bi-table me-2"></i></span> Danh sách bình luận
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="example" class="table table-striped data-table" style="width: 100%">
                  <thead>
                    <tr>
                      <th>ID bình luận</th>
                      <th>Tên khách hàng</th>
                      <th>Nội dung</th>
                      <th>Bình luận vào</th>
                      <th colspan="2">Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (!empty($listComments)) {
                      foreach ($listComments as $item) {
                    ?>
                        <tr>
                          <td><?php echo $item['id'] ?></td>
                          <td><?php echo $item['ten_dang_nhap'] ?></td>
                          <td><?php echo $item['noi_dung'] ?></td>
                          <td><?php echo $item['binh_luan_vao'] ?></td>
                          <td>
                            <a href="?mod=comments&act=edit&id=<?php echo $item['id'] ?>" title="Sửa bình luận">
                              <i class="fas fa-edit"></i>
                            </a>
                            <a href="?mod=comments&act=delete&id=<?php echo $item['id'] ?>" title="Xoá bình luận">
                              <i class="fas fa-times"></i>
                            </a>
                          </td>
                        </tr>
                    <?php  }
                    } ?>
                  </tbody>
                </table>
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