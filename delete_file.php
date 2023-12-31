<?php
try {

    $postData = json_decode(file_get_contents("php://input"), true);
    $folderPath = 'assets/userdata/' . strval($postData['id']);
    if(is_dir($folderPath)) {
        $files = scandir($folderPath);
        $files = array_diff($files, array('.', '..'));
        foreach($files as $file) {
            $filePath = $folderPath . DIRECTORY_SEPARATOR . $file;
            if(unlink($filePath)) {
                echo '檔案刪除成功：' . $file . PHP_EOL;
            } else {
                echo '檔案刪除失敗';
            }
        }
    } else {
        echo '尚未上傳檔案';
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage;
}

?>