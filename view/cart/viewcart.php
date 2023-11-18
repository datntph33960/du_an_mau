<style>
    .rowmb{
        margin-top:100px;
        margin-left:30px;
        background-color:#f7fff2;
    }
    table{
        margin-top:30px;

    }
    
</style>
<div class="rowmb">
    <div class="boxtrai mr ">
    <div class="rowmb ">
        <h3 class="boxtitle ">GIỎ HÀNG</h3>
        <div class=" row boxcontent">
            <table>
                <tr>
                    <th>Hình</th>
                    <th>Sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Thao tác</th>
                </tr>
                <?php 
                    $tong=0;
                    $i=0;
                    foreach($_SESSION['mycart'] as $cart){
                        $img=$cart[2];
                        $thanhtien=$cart[3] * $cart[4];
                        $tong+=$thanhtien;
                        $delsp='<a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xóa" ></a>';
                       echo '<tr>
                                    <td><img src="./Ảnh/'.$img.'" alt=""  height="80px"></td>
                                    <td>'.$cart[1].'</td>
                                    <td>'.$cart[3].'</td>
                                    <td>'.$cart[4].'</td>
                                    <td>'.$thanhtien.'</td>
                                    <td>'.$delsp.'</td>
                            </tr>';
                        $i+=1;
                    }
                
                    echo '<tr>
                            <td colspan="4">Tổng đơn hàng</td>
                           
                            <td>'.$tong.'</td>
                            <td></td>
                        </tr>';
                ?>
            </table>
        </div>
    </div>
    <div class="row mb ">
    <a href="index.php?act=bill"><input type="submit" value="ĐỒNG Ý ĐẶT HÀNG"> <a href="index.php?act=decart"><input type="button" value="XÓA GIỎ HÀNG"></a>
    </div>
    </div>
    

</div>