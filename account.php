
<?php
session_start();
$id = $_POST['login'];
$password = $_POST['pass'];
$level = $_POST['level'];

require_once 'conn.php';

$sql = "SELECT * FROM account WHERE `id` = '{$id}' AND `password` = '{$password}' AND `level` = '{$level}'";
$result = $link->query($sql);
if ($row = mysqli_fetch_assoc($result)) {
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $row['name'];
    $_SESSION['level'] = $row['level'];
    $response = 'Welcome, redirecting...';
    $success = true;
    $group = $row['group'];
} else {
    $response = 'Login failed';
    $success = false;
    $group = 0;
}

$responseData = [
    "message" => $response,
    "success" => $success,
    "group" => $group
];

$jsonResponse = json_encode($responseData);

header('Content-Type: application/json');

echo $jsonResponse;
?>