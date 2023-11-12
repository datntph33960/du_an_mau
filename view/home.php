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
.banner img{
width:100%;
height:700px;
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

.content {
    display: flex;
    justify-content: space-between;
    max-width: 1200px;
    margin: 20px auto;
    background-color:#f7fff2;
}

.all h1 {
    text-align: center;
    margin: 15px 0px;
}

.content-product {
    display: flex;
    flex-wrap: wrap;
    max-width: 900px;
}

.content-item {
    width: 265px;
    height: 350px;
    border: 1px solid rgba(0, 0, 0, 0.1);
    margin: 10px;
    margin-top: 25px;
    overflow: hidden;
    text-decoration: none;
    color: #000;
}

.content-item img {
    width: 265px;
    height: 270px;
    object-fit: cover;
}

.content-item-text {
    padding: 15px;
}

.content-item h2 {
    font-size: 19px;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    width: 100%;
}

.content-item-text b {
    color: #ff2525;
}

.box-content {
    display: flex;
    flex-direction: column;
    width: 300px;
    margin-top: 25px;
    background-color: #fff;
}

.box-content h1 {
    font-size: 27px;
    margin: 10px 0px;
}

.box-content a {
    padding: 10px;
    border-bottom: 1px solid #000;
    text-decoration: none;
    color: #000;
    font-size: 20px;
}

.box-content a:hover {
    background-color: #000;
    color: #fff;
    cursor: pointer;
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
</div>
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
</div>
<div class="all">
    <h1>Tất cả sản phẩm</h1>
</div>
<div class="content">
    <div class="content-product">
        <?php foreach ($listsanpham as $sanpham) { 
            extract($sanpham);
                    $detail = "index.php?act=sanphamct&id=".$id;
        echo ' <a href="'.$detail.'" class="content-item">
            <img width="265px" src="./Ảnh/'.$img.'" alt="" />
            <div class="content-item-text">
                <h2>'.$name.'</h2>
                <b>'.$price.'.000đ</b>
            </div>
        </a>';
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