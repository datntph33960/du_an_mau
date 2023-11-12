<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <title>Document</title>
</head>
<style>
* {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    box-sizing: border-box;
}

.admin {
    display: flex;
    justify-content: center;
    margin-top: 120px;
}

.function {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.function input {
    width: 150px;
    height: 35px;
    font-size: 17px;
    background: transparent;
    cursor: pointer;
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

    <div class="admin">
        <h1>Xin chào
            <?php if(isset($_SESSION["user"])){
            extract($_SESSION['user']);
        }
        ?>
            <?=$user?>
    </div>
    <div class="function">
        <form action="" method="post">
            <input type="submit" name="dangxuat" value="Đăng xuất">
        </form>
    </div>

</body>

</html>