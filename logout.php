<?php
    session_start();
    $_SESSION['id']="";
    $_SESSION['name']="";
    $_SESSION['level']=""; 

    header("Location:message.php?message=已登出");
?>