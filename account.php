<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
session_start();
$id = $_POST['login'];
$password = $_POST['pass'];
$level = $_POST['level'];

// $link=mysqli_connect('localhost','root', '','test');
$link = mysqli_connect('localhost', 'xiaoyao', 'xiaoyao', 'fwd');
$sql = "select distinct * from account where id='$id' and password='$password' and level='$level'";
$result = $link->query($sql);
if ($row = mysqli_fetch_assoc($result)) {
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $row['name'];
    $_SESSION['level'] = $row['level'];
    echo 'Welcome, redirecting...';
    switch ($level) {
        case 'admin':
            $href = 'admin.php';
            break;
        case 'teacher':
            $href = 'midhomeworkteacher_group.php';
            break;
        case 'student':
            $href = 'student.php?number=' . $row['group'];
            break;
    }
} else {
    echo 'Login failed';
    $href = 'midhomework.html';
}
?>
</body>
<script>
    setTimeout(() => {
        window.location.href = '<?php echo $href; ?>';
    }, 1000);
</script>
</html>