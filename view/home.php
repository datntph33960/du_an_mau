<style>
/* .banner img {
    width: 100%;
    margin-top: 50px;

    
    height: 400px;
} */
body{
    background-color:#f7fff2;

}
.banner{
    width:100%;
    min-width:300px;  
    text-align:center;
    position:relative;
}
.banner img {
    width: 100%;
    max-height: 500px; /* Điều chỉnh chiều cao tối đa của ảnh */
    margin-top: 50px;
}

.pre, .next{
    cursor:pointer;
    position:absolute;
    top:50%;
    padding:16px;
    color:white;
    font-weight:bold;
    font-size:18px;
    transition:0.6s ease-in-out;
    border-radius:0 3px 3px 0;
    border:none;
    
}
.pre:hover, .next:hover{
    background-color:rgba(0,0,0,0.8);
}
.next{
    right:0;
    border-radius:3px 0 0 3px;
}
.pre{
    left:0;
    border-radius:0 3px 3px 0;
}
h1 {
    text-align: center;
}

.intro {
    display: flex;
    align-items: center;
    justify-content: space-around;
    text-align: center;
    background-color: #f7fff2;
    height: 120px;
    margin-top: 5px;
    border-radius: 10px;
    
}

.intro-item {
    width: 350px;
}

.intro-item i {
    font-size: 40px;
}

.intro-item h2 {
    margin-top: 10px;
}

.intro-item p {
    margin-top: 5px;
}


.all h1 {
    text-align: center;
    margin: 15px 0px;
}
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
}

.content {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    flex-wrap: wrap;
    padding: 50px; 
}

.content-product {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    
}

.content-item {
    text-decoration: none;
    color: #333;
    width: 100%;
    max-width: 265px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    transition: transform 0.3s ease-in-out;
    
}

.content-item:hover {
    transform: scale(1.05);
}

.content-item img {
    max-width: 100%;
    height: auto;
    
}

.content-item-text {
    padding: 10px;
    
}

.content-item-text h2 {
    margin-bottom: 10px;
    font-size: 1.2em;
    
}

.content-item-text b {
    display: block;
    font-size: 1.2em;
    color: red;
    margin-bottom: 10px;
    
}

.gh {
    background-color: #458a5b;
    color: #fff;
    padding: 8px 16px;
    border: none;
    cursor: pointer;
    font-size: 1em;
    transition: background-color 0.3s ease-in-out;
    border-radius: 10px;
}

.gh:hover {
    background-color: #333;
}

.box-content {
    width: 100%;
    max-width: 300px;
    margin-top: 20px;
    background-color: #f9f9f9;
    padding: 15px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    
}

.box-content h1 {
    font-size: 1.5em;
    margin-bottom: 10px;
    border-bottom: 1px solid #e44d26;
    padding-bottom: 5px;
    
}

.box-content a {
    display: block;
    color: #333;
    margin-bottom: 5px;
    text-decoration: none;
    transition: color 0.3s ease-in-out;
}

.box-content a:hover {
    color: #e44d26;
}



</style>


                <div class="banner">
                    <img id="banner" src="./Ảnh/anh0.jpg" alt="">
                    <button class="pre" onclick="pre()">&#10094;</button>
                    <button class="next" onclick="next()">&#10095;</button>
                 </div>
    <div class="banner">
                  
    <script>
       var album=[];
for(var i=0;i<4;i++){
    album[i]=new Image();
    album[i].src="./Ảnh/anh"+i+".jpg";
}
 var interval=setInterval(slideshow,2000);
index=0;
function slideshow(){
    index++;
    if(index>4){
        index=0;
    }
    document.getElementById("banner").src=album[index].src;
   
    
}
function next(){
    index++;
    if(index>4){
        index=0;
    }
    document.getElementById("banner").src=album[index].src;
   
}
function pre(){
    index--;
    if(index<0){
        index=4;
    }
    document.getElementById("banner").src=album[index].src;
   
}
       
    </script>
</div>
</div>
</div><br><br><br><br>
<div class="intro">
    <div class="intro-item">
        <i class="fa-solid fa-truck"></i>
        <h2>Giao hàng hỏa tốc</h2>
        <p>SHIP hỏa tốc 1h nhận hàng trong nội thành HN</p>
    </div>
    <div class="intro-item">
        <i class="fa-regular fa-credit-card"></i>
        <h2>Cam kết chính hãng</h2>
        <p>Uy tín chất lượng cao</p>
    </div>
    <div class="intro-item">
        <i class="fa-solid fa-phone"></i>
        <h2>Hỗ trợ khách hàng</h2>
        <p>Uy tín chất lượng cao</p>
    </div>
</div><br><br><br><br><br>
<div class="all">
    <h1>Tất cả sản phẩm</h1>
</div>
<div class="content">
    <div class="content-product">
        <?php 
        $i=0;
         foreach ($listsanpham as $sanpham) { 
            extract($sanpham);
                    $detail = "index.php?act=sanphamct&id=".$id;
        echo ' <a href="'.$detail.'" class="content-item">
            <img width="265px" src="./Ảnh/'.$img.'" alt="" />
            <div class="content-item-text">
                <h2>'.$name.'</h2>
                <b>'.$price.'.000đ</b>
                <form action="index.php?act=addtocart" method="post"> 
                <input type="hidden" name="id" value="'.$id.'">
                <input type="hidden" name="name" value="'.$name.'">
                <input type="hidden" name="img" value="'.$img.'">
                <input type="hidden" name="price" value="'.$price.'">
                <input class="gh" type="submit" name="addtocart" value="Thêm giỏ hàng">
            </form>
            </div>
        </a>';
        $i+=1;
     } ?>
    </div>
    <div class="box-content">
        <h1>Danh mục</h1>
        <?php foreach ($dsdm as $danhmuc) {
            extract($danhmuc);
            $linkdm = "index.php?act=sanpham&iddm=".$id;
            echo '<a href="'.$linkdm.'">'.$name.'</a>';
         } ?>
    </div>
</div>


</div>

