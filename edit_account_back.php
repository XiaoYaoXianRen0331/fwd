<?php
// $link=mysqli_connect('localhost','root','12345678','test');
$link = mysqli_connect('localhost', 'xiaoyao', 'xiaoyao', 'fwd');

$sql = "UPDATE account SET `name` = '{$_POST['name']}', 
    `id` = {$_POST['id']}, 
    `password` = '{$_POST['pass']}', 
    email = '{$_POST['email']}', 
    `level` = '{$_POST['level']}' WHERE `account_id` = {$_POST['account_id']};";
try {
    $result = mysqli_query($link, $sql);
    echo '編輯成功';
} catch (PDOException $e) {
    echo '編輯失敗: ' . $e->getMessage();
}
?>