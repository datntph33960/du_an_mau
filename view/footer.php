<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<style>
    footer {
        display: flex;
        justify-content: space-around;
        background-color: #458a5b;
        margin-top: 40px;
        padding: 20px 0px;
    }

    footer .information {
        color: #000;
    }

    footer form {
        display: flex;
        margin-left: 20px;
    }

    footer form input {
        width: 300px;
        height: 35px;
        font-size: 20px;
        padding-left: 10px;
    }

    footer form #submit-email {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        width: 50px;
        height: 35px;
        padding-left: -10px;
        font-size: 17px;
        cursor: pointer;
        background-color: #ff2525;
        color: #000;
        border: none;
    }

    footer .information img {
        width: 200px;
        height: 120px;
        object-fit: cover;
    }

    footer .information p {
        padding: 10px 0px;
        font-size: 18px;
    }

    .menu-footer {
        margin-top: 5px;
    }

    .sub-footer {
        display: flex;
        flex-direction: column;
    }

    .sub-footer h1 {
        color: #000;
    }

    .sub-footer a {
        color: #000;
        text-decoration: none;
        padding: 10px 0px;
        font-size: 18px;
    }

    .fanpage h2 {
        color: #000;
    }
    
    </style>
    <footer>
        <div class="information">
            <img src="./Ảnh/logook.jpg" alt="" /><br><br>
            <p>Địa chỉ:123 Nguyễn Trãi,Thanh Xuân,Hà Nội</p><br>
            <p>Email:knq@fpt.edu.vn</p><br>
            <p>SĐT:092222222222</p><br>
            <p>Facebook:facebook.com</p><br>
            <p>Instagram:instagram.com</p><br>
            
        </div>
        <div class="menu-footer">
            <div class="sub-footer"><br><br><br>
                <h2>HỖ TRỢ KHÁCH HÀNG</h2><br><br><br>
                <a href="">Hướng dẫn mua hàng</a><br>
                <a href="">Thanh toán</a><br>
                <a href="">Tư vấn thêm</a><br><br><br>
                <form action="">
                <input type="text" placeholder="Email" required />
                <input type="submit" id="submit-email" />
            </form>
            </div>
        </div>
        <div class="fanpage"><br><br><br>   
            <h2>ĐỊA CHỈ</h2><br><br><br>
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.7603319317395!2d105.8416323!3d21.002242199999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac70b24078dd%3A0x3ae5a60d630ab8df!2zMTIzIEdp4bqjaSBQaMOzbmcsIMSQ4buTbmcgVMOibSwgSGFpIELDoCBUcsawbmcsIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1688398686405!5m2!1svi!2s"
                width="300px" height="200px" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </footer>
</body>

</html>