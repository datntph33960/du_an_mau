<main class="catalog  mb ">
  <div class="boxleft">
      <div class="mb">
        <div class="box_title">Đơn hàng của bạn</div>
        <div class="box_content">
          <table>
            <tr>
                <th>Mã đơn hàng</th>
                <th>Ngày đặt hàng </th>
                <th>Số lượng mặt hàng</th>
                <th>Tống khóa đơn</th>
                <th>Tình trạng đơn hàng</th>
            </tr>
            <?php 
            if(is_array($listbill)){
              foreach ($listbill as $bill){
                extract($bill);
                $ttdh=get_ttdh($bill['bill_status']);
                $countsp=loadall_cart_count($bill['id']);
                $tong=$cart['thanhtien'];
                $ht=$cart['tinhtrang'];
                
                echo'
                    <tr>
                    <td>'.$bill['id'].'</td>
                    <td>'.$bill['ngaydathang'].'</td>
                    <td>'.$countsp.'</td>
                    <td>'.$bill['total'].'</td>
                    <td>'.$ttdh.'</td>
                    </tr>';
               }
            }
                
    ?>
          </table>
        </div>
      </div>
    </div>
     
    </main>
</script>
