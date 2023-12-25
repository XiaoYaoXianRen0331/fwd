<?php

// $link=mysqli_connect('localhost','root','12345678','test');
$link = mysqli_connect('localhost', 'xiaoyao', 'xiaoyao', 'fwd');
$sql = "select * from account where id = {$_POST['id']}";
$result = mysqli_query($link, $sql);
if($result->num_rows == 0){
    echo '查無此人';
} else {
    while($row = $result->fetch_assoc()){
        if($row['level'] != 'student'){
            echo '此人不是學生';
        } else if($row['group'] == $_POST['number']){
            echo '已是組內成員';
        } else if($row['group'] != 0){
            echo '此人已有組別';
        } else {
            $sql = "UPDATE account SET `group`= {$_POST['number']} WHERE id = {$_POST['id']}";
            if($link->query($sql)){
                echo '新增成功';
            } else {
                echo '新增失敗';
            }
        }
    }
}
?>