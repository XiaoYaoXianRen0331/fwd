<?php
require_once 'conn.php';

$sql = "SELECT * FROM account WHERE id = {$_POST['id']}";
$result = mysqli_query($link, $sql);
if($result->num_rows > 0){
    echo 'id已存在';
    die();
}

$sql = "INSERT INTO account(id, `name`, `password`, `level`, email) VALUES({$_POST['id']}, '{$_POST['name']}', '{$_POST['id']}', '{$_POST['level']}', '{$_POST['email']}');";
try {
    $result = mysqli_query($link, $sql);
    echo '新增成功';
} catch (PDOException $e) {
    echo '新增失敗: ' . $e->getMessage();
}
?>