<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="sample.css">
 </head>
 <body>
   <div class="RedListCap" align=right>
     
    <?php
    session_start();
    if(!(isset($_SESSION['name']))){
      $_SESSION['id']="";
      $_SESSION['name']="";
      $_SESSION['level']="";
    }
    if($_SESSION['name'] != "")
    {
      if($_SESSION['level'] == "admin"){
        echo '<a href="insert.htm">[新增公告]</a>';
      }
      echo "您好，", $_SESSION['name'], "<a href=logout.php>登出</a>";
    }
    else {
      echo "<a href=login.htm>登入</a>";
    }
     ?>
   </div>

   <div align=center>
   <table class="List" width="500" border="1">
     <caption class="ListCap">最新消息</caption>
     <tr>
	   <th>標題</th>
	   <th>功能操作</th>
	   </tr>
	 <?php
	  //  $link=mysqli_connect('localhost','root', '','test');
    $link = mysqli_connect('localhost','xiaoyao','xiaoyao','fwd');
	   $sql = "select * from news";
	   $result = mysqli_query($link,$sql);
	   while($row=mysqli_fetch_assoc($result))
	   {
      echo "<tr>
              <td>", $row['title'], "</td>
              <td>
                <a href=news.php?newsid=", $row['newsid'], ">[查看]</a>";
      if($_SESSION['level']=="admin")
      {
        echo "<a href=update.php?newsid={$row['newsid']}>[修改]</a>
              <a href=delete.php?newsid={$row['newsid']}>[刪除]</a>";
      }
      echo '</td>
            </tr>';
	   }
	   mysqli_close($link);
	 ?>
   </table>
   </div>
 </body>
</html>
