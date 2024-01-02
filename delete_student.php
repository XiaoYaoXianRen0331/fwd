<?php
require_once 'conn.php';

$sql = "DELETE FROM account WHERE `id` = {$_GET['id']}";
try {
    $result = mysqli_query($link, $sql);
    echo '刪除成功';
} catch (\PDOException $e) {
    echo '刪除失敗' . $e->getMessage();
}

?>