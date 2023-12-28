<?php
// $link=mysqli_connect('localhost','root','12345678','test');
$link = mysqli_connect('localhost', 'xiaoyao', 'xiaoyao', 'fwd');
$sql = "UPDATE account SET grade = {$_GET['score']} WHERE `id` = {$_GET['id']}";
try {
    $result = mysqli_query($link, $sql);
    echo '編輯成功';
} catch (\PDOException $e) {
    echo '編輯失敗' . $e->getMessage();
}

?>