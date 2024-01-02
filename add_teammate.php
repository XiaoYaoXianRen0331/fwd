<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/add_teammate.css">
</head>
<body>
    <div class="container">
        <div class="wrap">
            <div class="title">請輸入組員學號</div>
            <div class="item">
                <input type="text" id="student_id">
            </div>
            <div class="item">
                <button class="submit" onclick="submit()">確認</button>
            </div>
        </div>
    </div>
</body>
<script>
    let id = document.getElementById('student_id');
    async function submit() {
        if(id.value == "") {
            id.focus();
        } else {
            let api = 'add_teammate_back.php';
            let option = { method: 'POST', 
                headers: { 'content-type': 'application/x-www-form-urlencoded'},
                body: 'id=' + encodeURIComponent(id.value) + '&number=<?php echo $_GET['number']; ?>'};
            let r = await fetch(api, option);
            r = await r.text();
            alert(r);
            if(r == '新增成功'){
                window.location.href = 'midhomeworkteacher.php?number=<?php echo $_GET['number']; ?>';
            }
            id.value = '';
            id.focus();
        }
    }
</script>
</html>