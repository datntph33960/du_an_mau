<style>
   body {
    font-family: 'Arial', sans-serif;
}
form {
    margin-top: 10px;
}

input[type="text"], input[type="submit"] {
    padding: 5px;
    margin-right: 5px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}
input[type="button"] {
    padding: 5px 10px;
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
        <h1>DANH SÁCH ĐƠN HÀNG  </h1>
    </div>
    <form action="index.php?act=listbill" method="post">
        <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
        <input type="submit" name="listok" value="GO">
    </form>
    <div class="row bm10 frmdsloai">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ ĐƠN HÀNG</th>
                    <th>KHÁCH HÀNG</th>
                    <th>SỐ LƯỢNG HÀNG</th>
                    <th>GIÁ TRỊ ĐƠN HÀNG</th>
                    <th>NGÀY ĐẶT HÀNG</th>
                    <th>THAO TÁC</th>
                </tr>
                <?php
                    foreach ($listbill as $bill) {
                        extract($bill);
                        $kh=$bill["bill_name"].'
                        <br> '.$bill["bill_email"].'
                        <br> '.$bill["bill_address"].'
                        <br>'.$bill["bill_tel"];
                        $ttdh=get_ttdh($bill["tinhtrang"]);
                        $countsp=loadall_cart_count($bill["id"]);
                        echo '<tr>
                                    <td><input type="checkbox" name=""id=""></td>
                                    <td>DAM-'.$bill['id'].'</td>
                                    <td>'.$kh.'</td>
                                    <td>'.$countsp.'</td>
                                    <td><strong>'.$bill["tongdonhang"].'</strong>VNĐ</td>
                                    <td>'.$ttdh.'</td>
                                    <td>'.$bill["ngaydathang"].'</td>
                                    <td><input type="button" value="Sửa"> <input type="button" value="Xóa"></td>
                                </tr>';
                    }
                ?>
                
            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa tất cả các mục đã chọn">
            
        </div>
    </div>
</div>