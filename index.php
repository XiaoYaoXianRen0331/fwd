<?php
    require_once 'conn.php';


    session_start();
    if(!(isset($_SESSION['name']))){
      $_SESSION['id']="";
      $_SESSION['name']="";
      $_SESSION['level']="";

      $href = "midhomework.html";
    } else {
        if($_SESSION['id'] != ""){
            $sql = "SELECT * FROM account WHERE `id`='{$_SESSION['id']}'";
            $result = mysqli_query($link,$sql);
            $row = mysqli_fetch_assoc($result);
            switch($_SESSION['level']){
                case 'admin':
                    $href = "admin.php"; break;
                case 'student':
                    $href = "student.php?number=" . $row['group']; break;
                case 'teacher':
                    $href = "midhomeworkteacher_group.php"; break;
            }
        } else {
            $href = "midhomework.html";
        }
    }

    $sql = "SELECT * from news ORDER BY newsdate DESC";
    $result = mysqli_query($link,$sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Generator" content="EditPlus®">
    <meta name="Author" content="">
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
    <div class="header">
        <div id="logo">
            <img src="assets/images/logo.png" alt="Fu Jen University" height="80px">
        </div>
        <div class="header-items">
            <?php
            if($_SESSION['name'] != ''){
                echo '<div class="">您好，' . $_SESSION['name'] . '</div>';
                if($_SESSION['level'] != 'student'){ ?>
                    <div class="item">
                        <a href="insert.htm">新增公告</a>
                    </div>
                <?php } ?>
                <div class="item">
                    <a href="change_password.php">修改密碼</a>
                </div>
                <div class="item">
                    <a href="logout.php">登出</a>
                </div>
                <div class="item">
                    <a href="<?php echo $href; ?>">前往評分管理系統</a>
                </div>
            <?php } else { ?>
                <div class="item">
                    <a href="<?php echo $href; ?>">登入</a>
                </div>
            <?php }
            ?>
        </div>
    </div>
        
    <div class="container">
        <div id="title">最新消息</div>
        <div class="wrap-news">
            <?php
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="new">
                    <div class="title"><?php echo $row['title']; ?></div>
                    <div class="options">
                        <div class="option"><?php echo $row['newsdate']; ?></div>
                        <div class="option">
                            <a href="news.php?newsid=<?php echo $row['newsid'];?>">查看</a>
                        </div>
                        <?php if($_SESSION['level'] == 'admin') { ?>
                            <div class="option">
                                <a href="update.php?newsid=<?php echo $row['newsid'];?>">修改</a>
                            </div>
                            <div class="option">
                                <a href="delete.php?newsid=<?php echo $row['newsid'];?>">刪除</a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </div>
</body>
</html>