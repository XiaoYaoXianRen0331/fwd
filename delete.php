<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $newsid=$_GET['newsid'];

        require_once 'conn.php';

        $sql="delete from news where newsid='$newsid'";
        if(mysqli_query($link,$sql)){
            //echo "刪除成功";
            header("Location:message.php?message=刪除成功");//轉址
        }
        else{
            //echo "刪除失敗";
            header("Location:message.php?message=刪除失敗");//轉址
        }
        mysqli_close($link);
    ?>
</body>
</html>