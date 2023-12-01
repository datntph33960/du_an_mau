<?php
getHeader("layout/header.php");
require "modules/cart/controllers/cartController.php";
if (!empty($_SESSION['cart']['buy'])) {
  $listCart = $_SESSION['cart']['buy'];
}
?>
<main id="main-site">
  <!-- Shopping cart section  -->
  <section id="cart" class="py-3">
    <div class="container-fluid w-75">
      <h5 class="font-baloo font-size-20">Giỏ hàng</h5>
      <div class="row">
        <div class="col-sm-9">
          <?php if (!empty($listCart)) {
            foreach ($listCart as $item) {
          ?>
              <!-- !cart item -->
              <div class="row border-top py-3 mt-3">
                <div class="col-sm-2">
                  <img src="admin/assets/img/products/<?php echo $item['image'] ?>" style="height: 120px;" alt="cart1" class="img-fluid">
                </div>
                <div class="col-sm-8">
                  <h5 class="font-baloo font-size-20"><?php echo $item['name'] ?></h5>
                  <p class="font-baloo font-size-14">Số lượng: <?php echo $item['qty'] ?></p>
                  <!-- product rating -->
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
                  <!--  !product rating-->
                  <!-- product qty -->
                  <form id="update-cart" method="POST" action="?mod=cart&act=update" class="qty d-flex pt-2">
                    <div class="d-flex font-rale w-25">
                      <input type="number" name="qty[<?php echo $item['id'] ?>]" class="qty_input border px-2 w-100 bg-light" value="<?php echo $item['qty'] ?>" placeholder="1" min="1">
                    </div>
                    <a href="<?php echo $item['deleteCart'] ?>" class="btn font-baloo text-danger px-3 border-right">Xoá</a>
                    <button type="submit" class="btn font-baloo text-danger" name="update-cart-btn">Cập nhật</button>
                    <a href="index.php" class="btn font-baloo text-danger">Tiếp Tục Mua Sắm</a>
                  </form>
                  <!-- !product qty -->
                </div>
                <div class="col-sm-2 text-right">
                  <div class="font-size-20 text-danger font-baloo">
                    <span class="product_price"><?php echo currency_format($item['price']) ?></span>
                  </div>
                </div>
              </div>
              <!-- !cart item -->
          <?php  }
          } ?>
        </div>
        <!-- subtotal section-->
        <div class="col-sm-3">
          <div class="sub-total border text-center mt-2">
            <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i>Đơn hàng sẽ được miễn phí vận chuyển</h6>
            <div class="border-top py-4">
              <h5 class="font-baloo font-size-20">Thành tiền:&nbsp; <span class="text-danger"><span class="text-danger" id="deal-price"><?php echo currency_format(getTotal())  ?></span></span> </h5>
              <a href="?mod=checkout&act=main" class="btn btn-warning mt-3">Thanh toán</a>
            </div>
          </div>
        </div>
        <!-- !subtotal section-->
      </div>
    </div>
  </section>
  <!-- !Shopping cart section  -->
</main>
<?php
getFooter("layout/footer.php");
?>