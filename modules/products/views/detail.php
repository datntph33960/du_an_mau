<?php
getHeader("layout/header.php");
require "modules/products/controllers/productsController.php";
$masanpham = (int)$_GET['id'];
if (setNameForUser()) {
  $nguoidung = thongtinnguoidung(setNameForUser());
  $manguoidung = $nguoidung['id'];
}
if (isset($_GET['id'])) {
  global $masanpham, $masptheodanhmuc;
  $sanpham = sanphamtheoid($masanpham);
  $masptheodanhmuc = (int)$sanpham['id'];
  $danhsachsanpham = sanphamtheodanhmuc($masptheodanhmuc);
}
if (isset($_POST['btn-comment'])) {
  if (setNameForUser()) {
    thembinhluan($_POST['comment'], $manguoidung, $masanpham);
  } else {
    echo "<script>";
    echo "alert('Phải đăng nhập mới có thể bình luận!')";
    echo "</script>";
  }
}
$binhluan = danhsachbinhluan();
?>
<main id="main-site">
  <!--   product  -->
  <section id="product" class="py-3">
    <div class="container">
      <?php if (!empty($sanpham)) {
      ?>
        <form class="row" action="?mod=cart&act=update" method="POST" id="form-cart">
          <div class="col-sm-6">
            <img src="admin/assets/img/products/<?php echo $sanpham['hinh_anh'] ?>" alt="product" class="img-fluid">
            <div class="form-row pt-4 font-size-16 font-baloo">
              <div class="col">
                <a href="<?php echo $sanpham['urlBuynow'] ?>" class="btn btn-danger form-control">Mua ngay</a>
              </div>
              <div class="col">
                <a href="<?php echo $sanpham['urlAddToCart'] ?>" class="btn btn-warning form-control">Thêm vào giỏ hàng</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 py-5">
            <h5 class="font-baloo font-size-24"><?php echo $sanpham['ten'] ?></h5>
            <div class="d-flex">
              <div class="rating text-warning font-size-12">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <a href="#" class=""></a>
            </div>
            <hr class="m-0">

            <!---    product price       -->
            <table class="my-3">
              <tr class="font-rale font-size-14">
                <td>Giá gốc:</td>
                <td><strike><?php echo currency_format($sanpham['gia']) ?></strike></td>
              </tr>
              <tr class="font-rale font-size-14">
                <td>Giá ưu đãi:</td>
                <td class="font-size-20 text-danger"><span><?php echo currency_format($sanpham['giam_gia']) ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;</small></td>
              </tr>
              <tr class="font-rale font-size-14">
                <td>Bạn tiết kiệm:  </td>
                <td><span class="font-size-16 text-danger"><?php echo currency_format($sanpham['gia'] - $sanpham['giam_gia']) ?></span></td>
              </tr>
              <tr class="font-rale font-size-14">
                <td>Tình Trạng :</td>
                <td class="font-size-16 text-green" style="color: green;">Còn Hàng</td>
              </tr>
              <tr class="font-rale font-size-14">
                <td>Phí Vận Chuyển :</td>
                <td class="font-size-16 text-danger">Miễn Phí</td>
              </tr>
            </table>
            <!---    !product price       -->

            <!--    #policy -->
            <div id="policy">
              <div class="d-flex">
                <div class="return text-center mr-5">
                  <div class="font-size-20 my-2 color-second">
                    <span class="fas fa-retweet border p-3 rounded-pill"></span>
                  </div>
                  <a href="#" class="font-rale font-size-12">Đổi trả <br>miễn phí</a>
                </div>
                <div class="return text-center mr-5">
                  <div class="font-size-20 my-2 color-second">
                    <span class="fas fa-truck  border p-3 rounded-pill"></span>
                  </div>
                  <a href="#" class="font-rale font-size-12">Miễn phí <br>vận chuyển</a>
                </div>
                <div class="return text-center mr-5">
                  <div class="font-size-20 my-2 color-second">
                    <span class="fas fa-check-double border p-3 rounded-pill"></span>
                  </div>
                  <a href="#" class="font-rale font-size-12">1 năm <br>bảo hành</a>
                </div>
              </div>
            </div>
            <!--    !policy -->
          </div>
          <div class="col-12 pt-5">
            <h6 class="font-rubik">Mô tả sản phẩm</h6>
            <hr>
            <p class="font-rale font-size-14"><?php echo $sanpham['mo_ta'] ?></p>
          </div>
        </form>
      <?php } ?>
    </div>
  </section>
  <!--   !product  -->
  <!-- Comment -->
  <section id="comment">
    <div class="container py-5">
      <h4 class="font-rubik font-size-20">Bình luận</h4>
      <form action="" class="form-comment" method="POST">
        <div class="form-group">
          <input name="comment" id="comment" class="ckeditor"></input>
          <?php echo form_error("comment") ?>
        </div>
        <div class="form-group">
          <?php echo form_error("add") ?>
          <?php echo notify("add") ?>
        </div>
        <div class="form-group" id="form-comment">
          <button type="submit" name="btn-comment" class="btn btn-primary">Bình luận</button>
        </div>
      </form>
      <div class="list-comment">
        <?php if (!empty($binhluan)) {
          foreach ($binhluan as $comment) {
        ?>
            <div class="item-comment">
              <div class="item-img">
                <img src="https://images.unsplash.com/photo-1682687219570-4c596363fd96?q=80&w=1975&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
              </div>
              <div class="item-content">
                <div class="item-info">
                  <h5 class="item-title font-baloo"><?php echo $comment['ten_dang_nhap'] ?></h5>
                  <time class="item-date font-baloo font-size-14"><?php echo $comment['binh_luan_vao'] ?></time>
                </div>
                <?php echo htmlspecialchars_decode($comment['noi_dung']) ?>
              </div>
            </div>
        <?php }
        } ?>
      </div>
    </div>
  </section>
  <!-- Comment -->
  <!-- Top Sale -->
  <section id="top-sale">
    <div class="container py-5">
      <h4 class="font-rubik font-size-20">Sản phẩm liên quan</h4>
      <hr>
      <!-- owl carousel -->
      <div class="owl-carousel owl-theme">
        <?php if (!empty($danhsachsanpham)) {
          foreach ($danhsachsanpham as $item) {
        ?>
            <div class="item py-2">
              <div class="product font-rale">
                <a href="<?php echo $item['urlDetail'] ?>"><img src="admin/assets/img/products/<?php echo $item['hinh_anh'] ?>" alt="product1" class="img-fluid"></a>
                <div class="text-center">
                  <h6><?php echo $item['ten'] ?></h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span><?php echo currency_format($item['gia']) ?></span>
                  </div>
                  <a href="<?php echo $item['urlAddToCart'] ?>" class="btn btn-warning font-size-12">Thêm vào giỏ hàng</a>
                </div>
              </div>
            </div>
        <?php  }
        } ?>
      </div>
      <!-- !owl carousel -->
    </div>
  </section>
  <!-- !Top Sale -->
</main>

<?php
getFooter("layout/footer.php")
?>