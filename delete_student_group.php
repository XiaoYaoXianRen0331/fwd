<?php
// $link=mysqli_connect('localhost','root','12345678','test');
$link = mysqli_connect('localhost', 'xiaoyao', 'xiaoyao', 'fwd');
$sql = "UPDATE account SET `group` = 0, `grade` = 0 WHERE `id` = {$_GET['id']}";
try {
    $result = mysqli_query($link, $sql);
    echo '刪除成功';
} catch (\PDOException $e) {
    echo '刪除失敗' . $e->getMessage();
}

?>