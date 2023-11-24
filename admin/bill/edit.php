<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  .row {
    max-width: 1200px;
    margin: auto;
    margin-top: 100px;
  }

  .font-title {
    margin: 10px 0px;
  }

  .form-content {
    margin: 10px 0px;
  }

  .row-input {
    margin: 17px 0px;
  }

  .row-input input {
    width: 1200px;
    height: 35px;
    padding-left: 8px;
    font-size: 17px;
  }

  .row-input select {
    font-size: 18px;
    width: 200px;
    height: 35px;
  }

  .row-input img {
    width: 250px;
  }

  .row-btn input {
    width: 180px;
    height: 40px;
    font-size: 19px;
    margin: 15px 0px;
    background-color: #458a5b;
    color: #fff;
    border: none;
    outline: none;
    border-radius: 5px;
    cursor: pointer;
  }
  .row-btn input:hover {
    background-color: #45a049; 
  }


</style>
</style>
<!-- Đơn hàng -->

<body>
  <div class="row">
    <div class="font-title">
      <h1>Sửa đơn hàng</h1>
    </div>
    <div class="form-content">
      <form action="index.php?act=editbill&id=<?= $infobill['id'] ?>" method="POST" enctype="multipart/form-data">
        <div class="row-input">
          <label> Mã đơn hàng </label> <br>
          <input type="text" name="id" value="<?= $id ?>" disabled>
        </div>
        <div class="row-input">
          <label>Tên khách hàng </label> <br>
          <input type="text" name="name" value="<?= $infobill['bill_name'] ?>">
        </div>
        <div class="row-input">
          <label>Địa chỉ </label> <br>
          <input type="text" name="address" value="<?= $infobill['bill_address'] ?>">
        </div>
        <div class="row-input">
          <label>Email </label> <br>
          <input type="email" name="email" value="<?= $infobill['bill_email'] ?>">
        </div>
        <div class="row-input">
          <label>Trạng thái</label> <br>
          <select name="iddm" id="">
            <option value="0" <?php echo $state = (int)($infobill['tinhtrang']) === 0 ? "selected" : ""; ?>>Đơn hàng mới chưa xử lý ...</option>
            <option value="1" <?php echo $state = (int)($infobill['tinhtrang']) === 1 ? "selected" : ""; ?>>Đang xử lý ... </option>
            <option value="2" <?php echo $state = (int)($infobill['tinhtrang']) === 2 ? "selected" : ""; ?>>Đang giao hàng ...</option>
            <option value="3" <?php echo $state = (int)($infobill['tinhtrang']) === 3 ? "selected" : ""; ?>>Đã giao hàng ✓</option>
          </select>
        </div>
        <div class="row-btn">
          <input type="submit" name="update" value="Cập nhật">
          <!-- bấn nút Cập Nhật chuyển sang index để xử lí -> nhảy về trang listbill.php -->
        </div>
      </form>
    </div>
  </div>
</body>

</html>

