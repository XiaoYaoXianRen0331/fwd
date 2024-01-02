<?php
require_once 'conn.php';


$sql = "UPDATE account SET `name` = '{$_POST['name']}', 
    `id` = {$_POST['id']}, 
    `password` = '{$_POST['pass']}', 
    email = '{$_POST['email']}', 
    `level` = '{$_POST['level']}' WHERE `account_id` = '{$_POST['account_id']}';";
try {
    $result = mysqli_query($link, $sql);
    echo '編輯成功';
} catch (PDOException $e) {
    echo '編輯失敗: ' . $e->getMessage();
}
?>