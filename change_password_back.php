<?php
require_once 'conn.php';

$sql = "SELECT * FROM account WHERE `password` = '{$_POST['old']}' AND `id` = '{$_POST['id']}'";
if($link->query($sql)->num_rows > 0){

    $sql="UPDATE account SET `password` = '{$_POST['new']}' 
        WHERE `password` = '{$_POST['old']}' AND `id` = '{$_POST['id']}'";
    try {
        mysqli_query($link,$sql);
        echo '修改成功';
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
} else {
    echo '密碼不正確';
}
?>