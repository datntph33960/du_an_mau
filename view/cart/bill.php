<style>
    .catalogmb {
  margin-top: 100px;
  margin-left: 30px;
  background-color: white;
  padding: 20px;
}

.boxleft {
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.mb {
  margin-bottom: 20px;
}

.box_title {
  background-color: #458a5b;
  color: #fff;
  padding: 10px;
  font-weight: bold;
}

.box_content {
  padding: 15px;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

table, th, td {
  border: 1px solid #ddd;
}

th, td {
  padding: 10px;
  text-align: left;
}

th {
  background-color: #458a5b;
}

table img {
  width: 100%;
  max-width: 200px; 
  height: auto;
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

.menu-button:hover {
  background-color: #458a5b; 
}


.mb10 {
  margin-bottom: 10px;
}

.mr20 {
  margin-right: 20px;
}


</style>
<main class="catalogmb ">
<div class="boxleft">
<div class="mb">
    <div class="box_title">Thông tin đặt hàng</div>
    <div class="box_content form_account">
    <form action="index.php?act=billcomfirm" method="post" enctype="multipart/form-data">
        <table>
            <?php
                if(isset($_SESSION['user'])){
                    $name=$_SESSION['user']['user'];
                    $address=$_SESSION['user']['address'];
                    $email=$_SESSION['user']['email'];
                    $tel=$_SESSION['user']['tel'];
                }else{
                    $name="";
                    $address="";
                    $email="";
                    $tel="";
                }
            ?>
            <tr>
                <td>Người đặt hàng</td>
                <td><input type="text" name="name" value="<?=$name?>"></td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td><input type="text" name="address" value="<?=$address?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?=$email?>"></td>
            </tr>
            <tr>
                <td>Điện thoại</td>
                <td><input type="text" name="tel" value="<?=$tel?>"></td>
            </tr>
        </table>
        <div class=" mb">
        <div class="box_title">Hình thức thành toán</div>
            <table>
                <tr>
                    <td><input type="radio" name="pttt" checked>Trả tiền khi nhận hàng</td>
                    <td><input type="radio" name="pttt" >Chuyển khoản ngân hàng</td>
                    <td><input type="radio" name="pttt" >Thanh toán online</td>
                </tr>
           </table>
        </div>
        <div class="okmb">
        <div class="box_title">Sản phẩm</div>
        <div class="box_content">
              <table>
                <?php
                  viewcart(0);  
                ?>
              </table>
        </div>
      </div>
    </div>
    </div>
    <div class="row mb10 ">
          <input class="mr20 menu-button" type="submit" value="Tiếp tục đặt hàng" name="dongydathang">
           </div>
    </div>
    </form>  
        
    </main>
