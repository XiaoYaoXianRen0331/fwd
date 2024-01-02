<?php
    require_once 'conn.php';

    $sql = "select * from project where `number` = '{$_GET['number']}';";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/add_group.css">
</head>
<body>
    <div class="container">
        <div class="wrap">
            <div class="title">修改專題</div>
            <div class="item">
                <div class="tip">請輸入新專題名稱</div>
                <input type="text" id="project" value="<?php echo $row['project']; ?>">
            </div>
            <div class="item">
                <div class="tip">請輸入新組別名稱</div>
                <input type="text" id="name" value="<?php echo $row['name']; ?>">
            </div>
            <div class="item">
                <button class="submit" id="button">確認</button>
            </div>
        </div>
    </div>
</body>
<script>
    let name = document.getElementById('name');
    let project = document.getElementById('project');
    let button = document.getElementById('button');
    button.addEventListener("click", async function(e) {
        if(name.value == "") {
            name.focus();
            result.innerHTML = "請輸入學號";
        } else {
            let api = 'edit_group_back.php';
            let option = { method: 'POST', 
                headers: { 'content-type': 'application/x-www-form-urlencoded'},
                body: 'name=' + encodeURIComponent(name.value) + '&project=' + encodeURIComponent(project.value) + '&group=<?php echo $_GET['number']; ?>'};
            let r = await fetch(api, option);
            r = await r.text();
            alert(r);
            if(r == '修改成功'){
                window.location.href = 'student.php?number=<?php echo $row['number']; ?>';
            }
            name.value = '';
            name.focus();
        }
    });
</script>
</html>