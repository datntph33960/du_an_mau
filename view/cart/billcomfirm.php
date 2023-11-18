<style>
    .catalogmb{
        margin-top:100px;
        margin-left:30px;
        background-color:#f7fff2;
    }
    table{
        margin-top:30px;
       
        padding-left:20px;

    }
    box_content{
        width: 50px;
        padding: auto;
        margin-left:30px;
    }
   
    table img{
        width: 100%;
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
      
    </main>
</script>

