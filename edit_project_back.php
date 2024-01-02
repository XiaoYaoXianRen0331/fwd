<?php

require_once 'conn.php';

$sql = "select * from account where id = {$_POST['id']}";
$result = mysqli_query($link, $sql);
if($result->num_rows == 0){
    echo '查無此人';
} else {
    while($row = $result->fetch_assoc()){
        if($row['level'] != 'student'){
            echo '此人不是學生';
        } else {
            $sql = "UPDATE account SET `project`= '{$_POST['name']}' WHERE `id` = {$_POST['id']}";
            if($link->query($sql)){
                echo '修改成功';
            } else {
                echo '修改失敗';
            }
        }
    }
}
?>