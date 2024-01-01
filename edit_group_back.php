<?php

// $link=mysqli_connect('localhost','root','12345678','test');
$link = mysqli_connect('localhost', 'xiaoyao', 'xiaoyao', 'fwd');
$sql = "select * from project where `number` = {$_POST['group']}";
$result = mysqli_query($link, $sql);

if($row = $result->fetch_assoc()){
    $sql = "UPDATE project SET `project`= '{$_POST['project']}', `name` = '{$_POST['name']}' WHERE `number` = {$_POST['group']}";
    if($link->query($sql)){
        echo '修改成功';
    } else {
        echo '修改失敗';
    }
} else {
    echo '查無此組別';
}
?>