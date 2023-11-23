<style>
    /* Áp dụng margin-top cho .catalog */
.catalog {
    margin-top: 6rem;
}

/* Thiết lập kiểu cho bảng */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px; /* Thêm khoảng cách giữa bảng và tiêu đề */
}

/* Thiết lập kiểu cho các ô tiêu đề */
th {
    background-color: #f2f2f2; /* Màu nền xám nhạt */
    padding: 10px;
    text-align: left;
}

/* Thiết lập kiểu cho các ô dữ liệu */
td {
    border: 1px solid #ddd; /* Đường viền */
    padding: 8px;
}

/* Đặt màu nền cho các dòng chẵn */
tr:nth-child(even) {
    background-color: #f9f9f9; /* Màu nền xám nhẹ */
}

/* Đặt kiểu cho các liên kết */
a {
    text-decoration: none;
    color: #3498db; /* Màu xanh dương */
}

a:hover {
    text-decoration: underline; /* Gạch chân khi rê chuột qua */
}

</style>
<main class="catalog mb" style="margin-top: 6rem;">
    <div class="boxleft">
        <div class="mb">
            <div class="box_title">Đơn hàng của bạn</div>
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
                    if (!empty($list_bill)) {
                        foreach ($list_bill as $cart) {
                            $tong = $cart['thanhtien'];
                            $ht = $cart['tinhtrang'];
                            switch ($ht) {
                                case "0":
                                    $tt = "Đơn hàng mới";
                                    break;
                                case "1":
                                    $tt = "Đang xử lí";
                                    break;
                                case "2":
                                    $tt = "Đang giao hàng";
                                    break;
                                case "3":
                                    $tt = "Đã giao hàng";
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
                        }
                    } else {
                        echo '<tr><td colspan="5">Không có đơn hàng nào để hiển thị.</td></tr>';
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</main>