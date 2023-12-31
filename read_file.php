<?php
try {
    $folderPath = 'assets/userdata/' . strval($_GET['id']);
    if(is_dir($folderPath)) {
        $files = scandir($folderPath);
        $files = array_diff($files, array('.', '..'));
        if(count($files) > 0) {
            foreach($files as $file) {
                $filePath = $folderPath . DIRECTORY_SEPARATOR . $file;

                $fileType = mime_content_type($filePath);
                $fileName = basename($filePath);

                header("Content-Type: {$fileType}");
                header("Content-Disposition: attachment; filename={$fileName}");
                header("Content-Length: " . filesize($filePath));

                readfile($filePath);
            }
        } else {
            echo '<script>alert("尚未上傳檔案");</script>';
            echo '<script>history.go(-1);</script>';
        }
    } else {
        echo '<script>alert("尚未上傳檔案");</script>';
        echo '<script>history.go(-1);</script>';
    }
} catch (Exception $e) {
    echo '<script>alert("Error: ' . $e->getMessage . '");</script>';
}

?>