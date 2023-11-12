<?php
function loadAllTk(){
    $sql = "SELECT * FROM taikhoan";
    $listtk = pdo_query($sql);
    pdo_query($sql);
    return $listtk;
}
?>