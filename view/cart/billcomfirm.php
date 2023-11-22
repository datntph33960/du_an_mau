<style>

body, h1, h2, h3, p, ul, li, table {
  margin: 0;
  padding: 0;
}


.main {
  background-color: #f8f8f8;
}


.boxleft {
  background-color: #fff;
  border: 1px solid #ddd;
  padding: 20px;
  margin: 20px;
}

.mb {
  margin-bottom: 20px;
}

.box_title {
  background-color:  #458a5b;
  color: #fff;
  padding: 10px;
}

.box_content {
  padding: 10px;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 10px;
}

table, th, td {
  border: 1px solid  #458a5b;
}

th, td {
  padding: 8px;
  text-align: left;
}


tr:nth-child(odd) {
  background-color: #f2f2f2;
}

h2 {
  color: #333;
  font-size: 24px;
}

.menu-button {
  background-color: #458a5b; 
  color: #fff; 
  padding: 10px 20px; 
  border: none; 
  border-radius: 5px; 
  cursor: pointer;
  font-size: 16px;
  text-decoration: none;
}
li {
  list-style-type: none;
  margin-bottom: 10px;
}

@media (max-width: 768px) {
  .boxleft {
    margin: 10px;
  }
}

</style>
<main class="catalogmb ">
  <div class="boxleft">
      <div class="mb">
        <div class="box_title"></div>
        <div class="box_content">
           <h2>Cám ơn quý khách</h2>
        </div>
      </div>
           <?php
              if(isset($bill)&&(is_array($bill))){
                extract($bill);
              }
              ?>
      <div class=" mb">
        <div class="box_title">Thông tin đơn hàng</div>
        <div class="box_content">
              <li>Mã đơn hàng : <?=$bill['id'];?></li>
              <li>Ngày đặt hàng : <?=$bill['ngaydathang'];?></li>
              <li>Tổng tiền : <?=$bill['tongdonhang'];?></li>
              <li>Phương thức thanh toán : <?=$bill['bill_pttt'];?></li>
        </div>
      </div>

      <div class=" mb">
        <div class="box_title">Thông tin đặt hàng</div>
        <div class="box_content">
              <table>
                  <tr>
                    <td>Người đặt hàng </td>
                    <td><?=$bill['bill_name']?></td>
                  </tr>
                  <tr>
                    <td>Địa chỉ</td>
                    <td><?=$bill['bill_address']?></td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td><?=$bill['bill_email']?></td>
                  </tr>
                  <tr>
                    <td>Điện thoại</td>
                    <td><?=$bill['bill_tel']?></td>
                  </tr>
              </table>
        </div>
      </div>
      <div class=" mb">
        <div class="box_title">Chi tiết giở hàng</div>
        <div class="box_content">
              <table>
                <?php
                 bill_chi_tiet($listbill);
                ?>
              </table>
        </div>
      </div>
    </div>
    <a href="index.php"><input class="menu-button" type="button" value="Tiếp Tục Mua Sắm"></td></a>

    </main>
</script>

