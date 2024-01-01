<?php
// $link=mysqli_connect('localhost','root','12345678','test');
$link = mysqli_connect('localhost', 'xiaoyao', 'xiaoyao', 'fwd');
$sql = "SELECT * FROM account WHERE `id` = {$_GET['id']}";
$row = mysqli_query($link, $sql)->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/add_account.css">
</head>
<body>
    <div class="container">
        <form action="edit_account_back.php" method="post" id="form">
            <div class="item">
                <div class="tip">姓名</div>
                <input type="text" name="name" value="<?php echo $row['name']; ?>">
            </div>
            <div class="item">
                <div class="tip">學號</div>
                <input type="number" name="id" value="<?php echo $row['id']; ?>">
            </div>
            <div class="item">
                <div class="tip">密碼</div>
                <input type="password" name="pass" value="<?php echo $row['password']; ?>">
            </div>
            <div class="item">
                <div class="tip">email</div>
                <input type="email" name="email" value="<?php echo $row['email']; ?>">
            </div>
            <div class="item">
                <div class="tip">身份</div>
                <select name="level">
                    <option value="student" <?php echo ($row['level'] == 'student') ? 'selected' : '' ?>>學生</option>
                    <option value="teacher" <?php echo ($row['level'] == 'teacher') ? 'selected' : '' ?>>老師</option>
                    <option value="admin" <?php echo ($row['level'] == 'admin') ? 'selected' : '' ?>>管理員</option>
                </select>
            </div>
            <div class="item">
                <button class="submit" id="button">修改</button>
            </div>
            <!-- <button></button> -->
        </form>
    </div>
</body>
<script>
    let form = document.getElementById("form");
    let button = document.getElementById("button");
    button.addEventListener("click", async function(e) {
        e.preventDefault();
        let formdata = new FormData(form);
        formdata.append('account_id', <?php echo $row['account_id']; ?>);
        let api = 'edit_account_back.php';
        let options = { method: 'POST', body: formdata};
        let response = await fetch(api, options);
        let responsetext = await response.text();
        alert(responsetext);
        if(responsetext == '編輯成功'){
            window.location.assign('admin.php');
        }
    });
</script>
</html>