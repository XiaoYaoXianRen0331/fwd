<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
//要記得去php.ini搜尋display_error,把On改成Off。auto_start=0改成=1。_cookie_lifetime=0改成=9600
session_start();
$id = $_POST['id'];
$password = $_POST['password'];

require_once 'conn.php';

$sql = "select distinct * from account where id='$id' and password='$password'";
$result = $link->query($sql);
if ($row = mysqli_fetch_assoc($result)) {
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $row['name'];
    $_SESSION['level'] = $row['level'];
    header("Location:message.php?message=登入成功");
} else {
    header("Location:message.php?message=帳號或密碼錯誤");
}
?>

</body>
</html>