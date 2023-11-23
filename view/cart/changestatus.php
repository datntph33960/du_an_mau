<main style="margin-top: 6rem;">
  <?php $id = isset($_GET['id']) ? intval($_GET['id']) : "";
  update_status_bill($id);
  if (update_status_bill($id)) {
    echo '<h2>Thanh toán thành công</h2>';
  } else {
    echo '<h2>Thanh toán thất bại</h2>';
  }
  ?>
</main>