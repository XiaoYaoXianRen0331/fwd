<?php
try {
    if(isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $uploadDir = 'assets/userdata/';
        $folderName = strval($_POST['id']);
        $folderPath = $uploadDir . $folderName;
        if(!is_dir($folderPath)) {
            if(mkdir($folderPath, 0755)) {
                echo $folderName . '資料夾建立成功' . PHP_EOL;
            } else {
                die('無法建立資料夾');
            }
        } else {
            $files = scandir($folderPath);
            $files = array_diff($files, array('.', '..'));
            foreach($files as $file) {
                $filePath = $folderPath . DIRECTORY_SEPARATOR . $file;
                if(unlink($filePath)) {
                    echo '原檔案已刪除：' . $file . PHP_EOL;
                } else {
                    echo '無法刪除原檔案' . PHP_EOL;
                }
            }
        }
        $uploadFile = $folderPath . DIRECTORY_SEPARATOR . basename($_FILES['file']['name']);
        if(move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)){
            echo '檔案上傳成功' . PHP_EOL;
            echo '檔案位置：' . $uploadFile;
        } else {
            echo '檔案上傳失敗';
        }
    } else {
        echo '沒有檔案';
    }
} catch (\PDOException $e) {
    echo '程式錯誤' . $e->getMessage();
}

?>