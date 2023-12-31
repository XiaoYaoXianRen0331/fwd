<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/update.css">
</head>
<body>
    <?php
    session_start();
        if($_SESSION['level']<>"admin")
        { ?>
            
            <script>
                alert("不能偷看");
                history.back();
            </script>

        <?php }

        $newsid=$_GET['newsid'];
        // $link=mysqli_connect('localhost','root', '','test');
        $link = mysqli_connect('localhost','xiaoyao','xiaoyao','fwd');
        $sql="select * from news where newsid='$newsid'";
        $result = mysqli_query($link,$sql);
        if($row=mysqli_fetch_assoc($result)){
            $title=$row['title'];
            $content=$row['content'];
            $newsdate=$row['newsdate'];
        }
    ?>
    <div class="container">
        <form method="post" action="updatedb.php">
            <table class="RedList">
            <caption class="RedListCap">修改公告</caption>
                <tr>
                    <td>公告編號</td>
                    <td><input type=text name="newsid" value="<?php echo $newsid; ?>"readonly></td>
                </tr>
                <tr>
                    <td>公告標題</td>
                    <td><input type=text name="title" value="<?php echo $title; ?>"required></td>
                </tr>
                <tr>
                    <td>公告內容</td>
                    <!-- <td><input type=text name="content" value="<?php echo $content; ?>"required></td> -->
                    <td><textarea name="content" cols="30" rows="10" style="resize: none;"><?php echo $content; ?></textarea></td>
                </tr>
                <tr>
                    <td>公告日期</td>
                    <td><input type=date name="newsdate" value="<?php echo $newsdate; ?>"required></td>
                </tr>
                <tr>
                    <td co;span=2><button type=submit>提交</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>