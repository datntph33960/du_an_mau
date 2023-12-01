<style>
  .payment-form {
    max-width: 600px;
    margin: auto;
  }

  .payment-form__heading {
    text-align: center;
    color: #333;
  }

  .payment-form-inner {
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-top: 20px;
    background-color: #f9f9f9;
  }

  .input-group {
    margin-bottom: 15px;
  }

  .payment-box {
    margin-top: 20px;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #f9f9f9;
  }

  .payment-box table {
    width: 100%;
  }

  .payment-box table td {
    padding: 10px;
    font-size:12px;
  }

  .payment-info {
    margin-top: 20px;
  }

  #table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }

  #table th, #table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
  }

  #table th {
    background-color: #f2f2f2;
  }

  .btn-primary {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
  }

  .btn-primary:hover {
    background-color: #0056b3;
  }
  .ok{
    height: 30px;
  }
</style>
<?php
getHeader("layout/header.php");
require "modules/checkout/controllers/checkoutController.php";
if (isset($_POST['placeorder-btn'])) {
  if (empty($_SESSION['cart']['buy'])) {
    echo "<script>";
    echo "alert('Không có sản phẩm nào trong giỏ hàng!')";
    echo "</script>";
  } else {
    if (!setNameForUser()) {
      redirect_to("?mod=users&act=login");
    } else {
      themdonhang($_POST['fullname'], $_POST['email'], $_POST['phone'], $_POST['address']);
    }
  }
}
if (!empty($_SESSION['cart'])) {
  $danhsachdonhang = $_SESSION['cart']['buy'];
  $tongdonhang = $_SESSION['cart']['info']['total'];
}
?>
<main id="main-site">
  <div class="container py-3">
    <div class="payment-box">
      <form action="" method="post" class="payment-form">
        <h2 class="payment-form__heading font-baloo">Thanh toán</h2>
        <div class="payment-form-inner">
  <div class="input-group mb-3 d-block">
    <input type="text" name="fullname" id="fullname" placeholder="Họ và Tên" value="quan" class="form-control" />
    <?php echo form_error("fullname") ?>
  </div>
  <div class="input-group mb-3 d-block">
    <input type="email" name="email" id="email" placeholder="Email" value="quanhmph40194@fpt.edu.vn" class="form-control" />
    <?php echo form_error("email") ?>
  </div>
  <div class="input-group mb-3 d-block">
    <input type="tel" name="phone" id="phone" placeholder="Số Điện Thoại" value="0862914419" class="form-control" />
    <?php echo form_error("phone") ?>
  </div>
  <div class="input-group mb-3 d-block">
    <input type="text" name="address" id="address" placeholder="Địa chỉ" value="phố mới bất bạt" class="form-control" />
    <?php echo form_error("address") ?>
  </div>
  <div class="payment-box">
    Hình thức thanh toán
    <table>
      <tr>
        <td><input class="ok" type="radio" name="pttt" checked>Tiền mặt</td>
        <td><input class="ok" type="radio" name="pttt">Chuyển khoản</td>
      </tr>
    </table>
  </div>
</div>
        <button type="submit" name="placeorder-btn" class="btn btn-primary w-100">Thanh toán</button>
      </form>
      <div class="payment-info">
        <h2 class="payment-form__heading font-baloo">Thông tin đơn hàng</h2>
        <div class="input-group mb-3 d-block">
          <table class="table table-striped" id="table">
            <thead>
              <tr>
                <th>Ảnh</th>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
              </tr>
            </thead>
            <tbody>
              <?php if (!empty($danhsachdonhang)) {
                foreach ($danhsachdonhang as $item) {
              ?>
                  <tr>
                    <td>
                  <img src="admin/assets/img/products/<?php echo $item['image'] ?>" style="height: 120px;" alt="cart1" class="img-fluid">
                </td>
                    <td><?php echo $item['name'] ?></td>
                    <td><?php echo  $item['qty'] ?></td>
                    <td><?php echo currency_format($item['sub_total']) ?></td>
                  </tr>
              <?php }
              } ?>
            </tbody>
            <tfoot>
              <tr>
                <td colspan="3" class="font-size-16">Tổng tiền: <?php if (!empty($_SESSION['cart'])) echo currency_format($tongdonhang) ?></td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>
<?php
getFooter("layout/footer.php");
?>