<?php
function loadAllDm(){
    $sql = "SELECT * FROM danhmuc ORDER by id desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

function loadAllSp($kym,$iddm){
    $sql = "SELECT * FROM sanpham WHERE 1";
    if($kym != ""){
       $sql.= " and name like '%".$kym."%'"; 
    }
    if($iddm > 0){
        $sql.= " and iddm ='".$iddm."'"; 
    }
    $sql.= " order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadOneSp($id){
    $sql = "SELECT * FROM sanpham WHERE id = $id";
    $sanpham = pdo_query_one($sql);
    return $sanpham;
}

// function loadDmCungLoai($iddm){
//     $sql = "SELECT * FROM danhmuc WHERE id='$iddm'";
//     $dm = pdo_query_one($sql);
//     extract($dm);
//     return $name;
// }

// function loadSpCungloai($id,$iddm){
//     $sql = "SELECT * FROM sanpham WHERE iddm='$iddm' AND id <> ".$id;
//     $listsanpham = pdo_query($sql);
//     return $listsanpham;
// }

function editSp($id,$name,$price,$mota,$luotxem,$iddm){
    $sql = "UPDATE sanpham set name='$name',price='$price',mota='$mota',luotxem='$luotxem',iddm='$iddm' WHERE id = $id";
    pdo_execute($sql);
    header("location: index.php?act=listsp");
}

function addSp($name,$price,$img,$mota,$luotxem,$iddm){
    $sql = "INSERT INTO sanpham VALUES(null,'$name','$price','$img','$mota','$luotxem','$iddm')";
    pdo_execute($sql);
    header("location: index.php?act=listsp");
}

function deleteSp($id){
    $sql = "DELETE FROM sanpham WHERE id ='$id'";
    pdo_execute($sql);    
}
?>