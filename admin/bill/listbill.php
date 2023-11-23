<style>
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
}

.row {
    margin: 0 auto;
}

.frmtitle {
    margin-bottom: 10px;
}

form {
    margin-top: 10px;
}

input[type="text"],
input[type="submit"] {
    padding: 8px;
    margin-right: 8px;
}
td a {
    display: inline-block;
    padding: 8px 16px;
    text-decoration: none;
    background-color: #45a049;
    color: #fff;
    border-radius: 4px;
}

td a:hover {
    background-color: #2980b9;
}
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

th,
td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

input[type="button"] {
    padding: 8px 16px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="button"]:hover {
    background-color: #45a049;
}

</style>
<div class="row">
    <div class="row frmtitle mb">
        <h1>DANH SÁCH ĐƠN HÀNG </h1>
    </div>
    <form action="index.php?act=listbill" method="post">
        <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
        <input type="submit" name="listok" value="GO">
    </form>
    <div class="row bm10 frmdsloai">
        <form action="?act=editbill" method="post" class="row mb10 frmdsloai">
            <table>
                <tr>
                    
                    <th>MÃ ĐƠN HÀNG</th>
                    <th>KHÁCH HÀNG</th>
                    <th>SỐ LƯỢNG HÀNG</th>
                    <th>GIÁ TRỊ ĐƠN HÀNG</th>
                    <th>TRẠNG THÁI</th>
                    <th>NGÀY ĐẶT HÀNG</th>
                    <th>THAO TÁC</th>
                </tr>
                <?php
                foreach ($listbill as $bill) {
                    extract($bill);
                    $kh = $bill["bill_name"] . '
                        <br> ' . $bill["bill_email"] . '
                        <br> ' . $bill["bill_address"] . '
                        <br>' . $bill["bill_tel"];
                    $ttdh = get_ttdh($bill["tinhtrang"]);
                    $countsp = loadall_cart_count($bill["id"]);
                    echo '<tr>
                                    
                                    <td>DAM-' . $bill['id'] . '</td>
                                    <td>' . $kh . '</td>
                                    <td>' . $countsp . '</td>
                                    <td><strong>' . $bill["tongdonhang"] . '</strong>VNĐ</td>
                                    <td>' . $ttdh . '</td>
                                    <td>' . $bill["ngaydathang"] . '</td>
                                    <td><a href="?act=editbill&id=' . $bill['id'] . '" $bill>Sửa</a></td>
                                </tr>';
                }
                ?>

            </table>
        </form>
    </div>
</div>