<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/change_password.css">
</head>
<body>
    <div class="container">
        <form method="post" action="change_password_back.php">
            <div class="name"><?php echo $_SESSION['name']; ?></div>
            <div class="id"><?php echo $_SESSION['id']; ?></div>
            <div class="item">
                <input type="password" name="old" id="old">
                <label for="old">輸入舊密碼</label>
            </div>
            <div class="item">
                <input type="password" name="new" id="new">
                <label for="new">輸入新密碼</label>
            </div>
            <div class="item">
                <input type="password" name="confirm" id="confirm">
                <label for="confirm">再次輸入密碼</label>
            </div>
            <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
            <div class="item">
                <button type="button" id="button" class="submit">送出</button>
            </div>
        </form>
    </div>
</body>
<script>
    let old = document.getElementById('old');
    let password = document.getElementById('new');
    let confirm = document.getElementById('confirm');
    let button = document.getElementById('button');
    button.addEventListener('click', async function(e) {
        if(old.value == "") {
            alert('密碼未填寫');
            old.focus();
            exit();
        } else if(password.value == "") {
            alert('密碼未填寫');
            password.focus();
            exit();
        } else if(confirm.value == "") {
            alert('密碼未填寫');
            confirm.focus();
            exit();
        } else if(password.value != confirm.value) {
            alert('密碼不一致');
            password.focus();
            exit();
        }
        let form = document.querySelector('form');
        let formdata = new FormData(form);
        let api = 'change_password_back.php';
        let options = {
            method: 'POST',
            body: formdata
        }
        let response = await fetch(api, options);
        let message = await response.text();
        alert(message);
        if(message == '修改成功') {
            window.location.assign('index.php');
        }
    });
</script>
</html>