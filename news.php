<?php
// $link=mysqli_connect('localhost','root','12345678','test');
$link = mysqli_connect('localhost', 'xiaoyao', 'xiaoyao', 'fwd');
$sql = "SELECT * FROM news WHERE newsid = '{$_GET['newsid']}'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result);

$sql = "SELECT `name` FROM account WHERE `id` = '{$row['arthur']}'";
$arthur = $link->query($sql)->fetch_assoc()['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/news.css">
</head>
<body>
    <div class="header">
        <div id="logo">
            <img src="assets/images/logo.png" alt="Fu Jen University" height="80px">
        </div>
        <div class="header-items">
            <div class="item">
                <a href="index.php">返回首頁</a>
            </div>
        </div>
    </div>
    <div class="container">
        <ul>
            <li>
                <div class="id">#<?php echo $row['newsid']; ?></div>
            </li>
            <li>
                <div class="title"><?php echo $row['title']; ?></div>
            </li>
            <li class="sub">
                <div class="date"><?php echo $row['newsdate']; ?></div>
                <div class="arthur"><?php echo $arthur; ?></div>
            </li>
            <li>
                <div class="content"><?php echo $row['content']; ?></div>
            </li>
        </ul>
    </div>
</body>
</html>