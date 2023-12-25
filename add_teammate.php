<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="wrap">
        <div class="tip">請輸入組員學號</div>
        <input type="text" id="student_id">
        <button onclick="submit()">確認</button>
        <div class="result"></div>
        <a href="student.php?number=<?php echo $_GET['number']; ?>">返回</a>
    </div>
</body>
<script>
    let id = document.getElementById('student_id');
    let result = document.querySelector('.result');
    async function submit() {
        if(id.value == "") {
            id.focus();
            result.innerHTML = "請輸入學號";
        } else {
            let api = 'add_teammate_back.php';
            let option = { method: 'POST', 
                headers: { 'content-type': 'application/x-www-form-urlencoded'},
                body: 'id=' + encodeURIComponent(id.value) + '&number=<?php echo $_GET['number']; ?>'};
            let r = await fetch(api, option);
            r = await r.text();
            console.log(r);
            result.innerHTML = r;
            id.value = '';
        }
    }
</script>
</html>