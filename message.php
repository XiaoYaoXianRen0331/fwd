<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/reset.css">
  <link rel="stylesheet" href="assets/css/message.css">
</head>
<body>
  <div class="container">
    <div class="block">
      <div class="message"><?php echo $_GET['message']; ?></div>
      <div class="home">
        <a href="index.php">返回首頁</a>
      </div>
    </div>
  </div>
</body>
<script>
  document.addEventListener('keydown', function(e) {
    // console.log(e);
    if (e.keyCode == 13) {
      window.location.assign('index.php');
    }
  });
</script>
</html>

