<?php
getHeader("layout/header.php");
require "modules/orders/controllers/ordersController.php";
$orderID  = isset($_GET["id"]) ? (int)$_GET["id"] : "";
$orderInfo = getOrderDetailByID($orderID);
?>
<!--Main layout-->
<div id="wrapper">
  <?php require "layout/sidebar.php"; ?>
  <main id="mainWrapper">
    <h2 class="mainWrapper-heading">Quản lý đơn hàng</h2>
    <div class="container pt-4" id="main-content">
      <div class="row">
        <div class="col-md-12 mb-3">
          <div class="card">
            <div class="card-header">
              <span><i class="bi bi-table me-2"></i></span> Chi tiết đơn hàng số <?php echo $orderID ?>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="example" class="table table-striped data-table" style="width: 100%">
                  <thead>
                    <tr>
                      <th>ID đơn hàng</th>
                      <th>Tên sản phẩm</th>
                      <th>Hình ảnh</th>
                      <th>Số lượng</th>
                      <th>Tổng tiền</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (!empty($orderInfo)) {
                    ?>
                      <tr>
                        <td><?php echo $orderInfo['id'] ?></td>
                        <td><?php echo $orderInfo['ten'] ?></td>
                        <td>
                          <img src="assets/img/products/<?php echo $orderInfo['hinh_anh'] ?>" alt="Không có ảnh" class="image-item">
                        </td>
                        <td><?php echo $orderInfo['so_luong'] ?></td>
                        <td><?php echo currency_format($orderInfo['don_gia']) ?></td>
                      </tr>
                    <?php } ?>
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
getFooter("layout/footer.php");
