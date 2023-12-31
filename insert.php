<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $newsid=$_POST['newsid'];
        $title=$_POST['title'];
        $content=$_POST['content'];
        $newsdate=$_POST['newsdate'];

        session_start();
        $arthur=$_SESSION['id'];

        // $link=mysqli_connect('localhost','root','12345678','test');
        $link = mysqli_connect('localhost','xiaoyao','xiaoyao','fwd');
        $sql="insert into news (newsid, title, content, newsdate, arthur) values ('$newsid', '$title', '$content', '$newsdate', '$arthur')";
        if(mysqli_query($link,$sql)){
            header("Location:message.php?message=新增成功");//轉址
        }
        else{
            header("Location:message.php?message=新增失敗");//轉址
        }
        mysqli_close($link);
    ?>
</body>
</html>