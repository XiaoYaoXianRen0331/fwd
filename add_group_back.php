<?php
// $link=mysqli_connect('localhost','root','12345678','test');
$link = mysqli_connect('localhost', 'xiaoyao', 'xiaoyao', 'fwd');
$sql = "SELECT * FROM project WHERE `number` = '{$_POST['number']}'";
$result = mysqli_query($link, $sql);
if($result->num_rows > 0){
    echo 'id已存在';
    die();
}

$sql = "INSERT INTO project(`name`, `number`, `project`) VALUES('{$_POST['name']}', '{$_POST['number']}', '{$_POST['project']}');";
try {
    $result = mysqli_query($link, $sql);
    echo '新增成功';
} catch (PDOException $e) {
    echo '新增失敗: ' . $e->getMessage();
}
?>