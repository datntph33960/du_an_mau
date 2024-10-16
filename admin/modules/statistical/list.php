<?php
function layTatCaDanhMuc()
{
    // Thực hiện truy vấn SQL hoặc các thao tác cần thiết để lấy danh sách danh mục
    // ...

    // Dưới đây là một mảng giả định
    $danhMucs = [
        ['id' => 1, 'ten' => 'Danh mục 1'],
        ['id' => 2, 'ten' => 'Danh mục 2'],
        //...
    ];

    return $danhMucs;
}

// Giả sử bạn có một hàm để lấy thông tin sản phẩm theo danh mục từ database
function layThongTinSanPhamTheoDanhMuc($idDanhMuc)
{
    // Thực hiện truy vấn SQL hoặc các thao tác cần thiết để lấy thông tin sản phẩm
    // theo danh mục có id là $idDanhMuc
    // ...

    // Dưới đây là một mảng giả định
    $thongTinSanPham = [
        ['gia' => 100, 'so_luong' => 50],
        ['gia' => 150, 'so_luong' => 30],
        //...
    ];

    return $thongTinSanPham;
}

// Hàm để thống kê theo danh mục
function thongKeTheoDanhMuc()
{
    $thongKe = [];

    // Lấy danh sách danh mục
    $danhMucs = layTatCaDanhMuc();

    foreach ($danhMucs as $danhMuc) {
        $idDanhMuc = $danhMuc['id'];
        $tenDanhMuc = $danhMuc['ten'];

        // Lấy thông tin sản phẩm theo danh mục
        $thongTinSanPham = layThongTinSanPhamTheoDanhMuc($idDanhMuc);

        // Thực hiện các tính toán thống kê dựa trên thông tin sản phẩm
        $soLuong = 0;
        $tongGia = 0;
        $giaCaoNhat = 0;

        foreach ($thongTinSanPham as $sanPham) {
            $soLuong += $sanPham['so_luong'];
            $tongGia += $sanPham['gia'] * $sanPham['so_luong'];
            $giaCaoNhat = max($giaCaoNhat, $sanPham['gia']);
        }

        // Lưu thông tin thống kê cho từng danh mục
        $thongKe[] = [
            'id' => $idDanhMuc,
            'ten' => $tenDanhMuc,
            'so_luong' => $soLuong,
            'tong_gia' => $tongGia,
            'gia_cao_nhat' => $giaCaoNhat,
        ];
    }

    return $thongKe;
}

// Sử dụng hàm để lấy thông tin thống kê
$thongKeDanhMuc = thongKeTheoDanhMuc();

// In thông tin thống kê hoặc sử dụng dữ liệu này trong trang web của bạn
print_r($thongKeDanhMuc);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.list {
    max-width: 1200px;
    margin: auto;
    margin-top: 100px;
}

.list h1 {
    font-size: 24px;
    margin: 10px 0px;
}
body{
    background-color:#f7fff2;
}
table {
    margin: 20px 0px;
    width: 1200px;
    border-collapse: collapse;
}

table tr td {
    padding: 10px;
}

table tr td a {
    text-decoration: none;
    color: #000;
    margin: 0px 10px;
}

.edit-delete {
    width: 300px;
    display: flex;
    align-items: center;
    border: none;
    border-bottom: 1px solid #000;
}

.edit {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: rgb(231, 231, 0);
    width: 120px;
    height: 30px;
}

.delete {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: rgb(255, 72, 0);
    color: #fff;
    width: 250px;
    height: 30px;
}

.function {
    width: 1200px;
    margin: auto;
    display: flex;
    justify-content: space-between;
}

.function a {
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid #000;
    width: 150px;
    height: 35px;
    text-decoration: none;
    color: #000;
}
</style>

<body>
    <div class="list">
        <h1>Thống kê</h1>
        <table border="1">
            <tr>
                <td style="width: 100px;">Id danh mục</td>
                <td style="width: 300px;">Tên danh mục</td>
                <td style="width: 200px;">Số lượng</td>
                <td style="width: 200px;">Giá cao nhất</td>
                <td style="width: 200px;">Giá thấp nhất</td>
                <td style="width: 200px;">Giá trung bình</td>

            </tr>
            <?php if (!empty($listCategory)) {
                                            foreach ($thongTinSanPham as $item) {
                                        ?>
           <td><?php echo $item['id'] ?></td>
           <td><?php echo $item['tieu_de'] ?></td>
              
            </tr>';
            <?php }
           } ?>
        </table>
    </div>
    <div class="function">
        <a href="index.php">Quay lại trang chủ</a>
        <a href="index.php?act=addsp">Mở lại tài khoản</a>
    </div>
</body>

</html>