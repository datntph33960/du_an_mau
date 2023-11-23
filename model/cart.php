<?php
function viewcart($del)
{
    global $cart;
    $tong = 0;
    $i = 0;
    if ($del == 1) {
        $delsp_th = '<th>Thao tác</th>';

        $delsp_td2 = '<td></td>';
    } else {
        $delsp_th = '';
        $delsp_td2 = '';
    }
    echo '<tr>
    <th>Hình</th>
    <th>Sản phẩm</th>
    <th>Đơn giá</th>
    <th>Số lượng</th>
    <th>Thành tiền</th>
    ' . $delsp_th . '
</tr>;';
    foreach ($_SESSION['mycart'] as $cart) {
        $img = $cart[2];
        $thanhtien = $cart[3] * $cart[4];
        $tong += $thanhtien;
        if ($del == 1) {

            $delsp_td = '<td><a href="index.php?act=delcart&idcart=' . $cart[2] . '"><input type="button" value="Xóa" ></a></td>';
        } else {
            $delsp_td = '';
        }

        echo ' 
                    
                        <tr>       
                            <td><img src="./Ảnh/' . $img . '" alt="" height="80px"></td>
                            <td>' . $cart[1] . '</td>
                            <td>' . $cart[3] . '</td>
                            <td>' . $cart[4] . '</td>
                            <td>' . $thanhtien . '</td>
                                ' . $delsp_td . '
                    </tr>';
        $i += 1;
    }

    echo '<tr>
                    <td colspan="4">Tổng đơn hàng</td>
                    
                    <td>' . $tong . '</td>
                        ' . $delsp_td2 . '
                </tr>';
}
function bill_chi_tiet($listbill)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    echo '<tr>
    <th>Hình</th>
    <th>Tên</th>
    <th>Giá</th>
    <th>Số lượng</th>
    <th>Thành tiền</th>
</tr>
    ';
    foreach ($listbill as $cart) {
        $img = $img_path . $cart['img'];
        $tong = $cart['thanhtien'];
        echo '
            <tr>
            <td><img src="./Ảnh/' . $img . '" alt="" height="80px"></td>
            <td>' . $cart['name'] . '</td>
            <td>' . $cart['price'] . '</td>
            <td>' . $cart['soluong'] . '</td>
            <td>' . $tong . '</td>
             </tr>';
        $i += 1;
    }
    echo '<tr>
         <td></td>
         <td></td>
         <td></td>
         <td></td>   
         <td></td>
    </tr>';
}

function tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = ($cart['3'] * $cart['4']);
        $tong = $tong + $ttien;
    }
    return $tong;
}

function insert_bill($name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = "insert into `bill`(bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,tongdonhang) values('$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_last($sql);
}

function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "insert into cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) values('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}

function loadone_bill($id)
{
    $sql = "select * from bill where id = " . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadall_cart($idbill)
{
    $sql = "select * from cart where idbill = " . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_cart_count($idbill)
{
    $sql = "select * from cart where idbill = " . $idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}
function loadall_bill($iduser)
{
    $sql = "select * from bill where 1";
    if ($iduser > 0) $spl = " AND iduser=" . $iduser;
    $spl .= "order by id desc";

    $listbill = pdo_query($sql);
    return $listbill;
}

function ht_donhang()
{
    $sql = "SELECT * FROM bill JOIN cart ON bill.id = cart.idbill;";
    $bill = pdo_query($sql);
    return $bill;
}

function thongke()
{
    $sql = "SELECT 
            danhmuc.id AS madm, 
            danhmuc.name AS tendm, 
            COUNT(sanpham.id) AS countsp, 
            MIN(sanpham.price) AS minprice, 
            MAX(sanpham.price) AS maxprice, 
            AVG(sanpham.price) AS avgprice
        FROM 
            danhmuc
        LEFT JOIN 
            sanpham ON danhmuc.id = sanpham.iddm
        GROUP BY 
            danhmuc.id, danhmuc.name
        ORDER BY 
            danhmuc.id DESC;
        ";
    $listtk = pdo_query($sql);
    return $listtk;
}
function get_ttdh($n)
{
    switch ($n) {
        case 0:
            $tt = "đơn hàng mới";
            break;

        case 1:
            $tt = "Đang xử lý";
            break;
        case 2:
            $tt = "Đang giao hàng";
            break;
        case 3:
            $tt = "Hoàn Tất";
            break;
        default:
            $tt = "Đơn hàng mới";
    }
    return $tt;
}
// Đơn hàng
function load_list_bill($id)
{
    $sql = "select b.*, c.id as `id_cart`, c.* from `bill` as b inner join `cart` as c on b.id = c.idbill where c.iduser = '{$id}'";
    $list = pdo_query($sql);
    return $list;
}
function update_status_bill($id)
{
    if (isset($id)) {
        $sql = "update `bill` set tinhtrang = '3' where `id` = '{$id}'";
        pdo_execute($sql);
        return true;
    }
    return false;
}
// Đơn hàng admin
function get_info_bill($id)
{
    $sql = "select * from `bill` where `id` = '{$id}'";
    $list = pdo_query_one($sql);
    return $list;
}
function update_bill($name, $address, $email, $status, $id)
{
    $sql = "update `bill` set
            bill_name = '" . ($name) . "',
            bill_address = '" . ($address) . "',
            bill_email = '" . ($email) . "',
            tinhtrang = '" . ($status) . "'
            where id = " . intval($id);
    if (pdo_query_one($sql)) {
        return true;
    }
    return false;
}
