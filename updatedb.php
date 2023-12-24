<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //echo var_dump($_POST);
        $newsid=$_POST['newsid'];
        $title=$_POST['title'];
        $content=$_POST['content'];
        $newsdate=$_POST['newsdate'];

        // $link=mysqli_connect('localhost','root','12345678','test');
        $link = mysqli_connect('localhost','xiaoyao','xiaoyao','fwd');
        $sql="update news set newsdate='$newsdate', title='$title', content='$content' where newsid='$newsid'";
        echo $sql;
        if(mysqli_query($link,$sql)){
            echo "修改成功";
            header("Location:message.php?message=修改成功");//轉址
        }
        else{
            echo "修改失敗";
            header("Location:message.php?message=修改失敗");//轉址
        }
        mysqli_close($link);
    ?>
</body>
</html>