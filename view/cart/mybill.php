<style>
  
.catalog {
    margin-top: 6rem;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px; 
}


th {
    background-color: #f2f2f2; 
    padding: 10px;
    text-align: left;
}


td {
    border: 1px solid #ddd; 
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #f9f9f9; 
}


a {
    text-decoration: none;
    color: #3498db; 
}

a:hover {
    text-decoration: underline; 
}
.custom-button {
    background-color: #458a5b; 
  color: #fff; 
  padding: 10px 20px; 
  border: none; 
  border-radius: 5px; 
  cursor: pointer;
  font-size: 16px;
  text-decoration: none;
        }
.custom-button:hover {
            background-color: #45a049; 
        }
</style>
<main class="catalog mb" style="margin-top: 6rem;">
    <div class="boxleft">
        <div class="mb">
            <div class="box_title"><h2>Đơn hàng của bạn</h2></div>
            <div class="box_content">
                <table>
                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>Ngày đặt hàng</th>
                        <th>Số lượng mặt hàng</th>
                        <th>Tống khóa đơn</th>
                        <th>Tình trạng đơn hàng</th>
                        <th>Thao tác</th>
                    </tr>
                    <?php
                    if (isset($_SESSION["user"])) {
                        extract($_SESSION['user']);
                        $id_user = $_SESSION['user']['id'];
                        $list_bill = load_list_bill($id_user);
                    }
                    // Kiểm tra xem mảng $hienthi có dữ liệu hay không
                    //2
                    if (!empty($list_bill)) {
                        foreach ($list_bill as $cart) {
                            $tong = $cart['thanhtien'];
                            $ht = $cart['tinhtrang'];
                            switch ($ht) {
                                case "0":
                                    $tt = "Đơn hàng mới chờ xác nhận ... ";
                                    break;
                                case "1":
                                    $tt = "Đang xử lí ... ";
                                    break;
                                case "2":
                                    $tt = "Đang giao hàng ... ";
                                    break;
                                case "3":
                                    $tt = "Đã giao hàng ✓ ";
                                    break;
                                default:
                                    $tt = "Đơn hàng mới";
                                    break;
                            }
                            echo '
                                <tr>
                                    <td>' . $cart['id'] . '</td>
                                    <td>' . $cart['ngaydathang'] . '</td>
                                    <td>' . $cart['soluong'] . '</td>
                                    <td>' . $cart['thanhtien'] . '</td>
                                    <td>' . $tt . '</td>
                                    <td><a href="index.php?act=changestatusbill&id=' . $cart['idbill'] . '">Thanh toán</a></td>
                                    

                                </tr>';
                                // click vào Thanh Toán nhảy sang tab changestatus
                        }
                    } else {
                        echo '<tr><td colspan="5">Không có đơn hàng nào để hiển thị.</td></tr>';
                    }
                    ?>
                </table><br>
                <div>
                    <a href="index.php"><input class="custom-button" type="submit" value="Tiếp tục đặt hàng" name="dongydathang"></a>
           </div>
            </div>
        </div>
    </div>
</main>