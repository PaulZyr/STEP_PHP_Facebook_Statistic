<?php

if (isset($_POST['btn'])) {
    if ($_FILES && $_FILES['json_file']['error']==UPLOAD_ERR_OK) {
        // Note that calling this function <is_uploaded_file()> before <move_uploaded_file()> is not necessary, as it does the exact same checks already.
        $isUploaded = is_uploaded_file($_FILES['json_file']['tmp_name']);
        $fileInfo = new SplFileInfo($_FILES['json_file']['name']);
        if ($isUploaded) {
            if ($fileInfo->getExtension() == "json") {
                if ($_FILES['json_file']['size'] < FILE_JSON_MAX_SIZE) {
                    $hashFileName = sha1($_FILES['json_file']['name'], false).'.json';
                    //print_r($hashFileName);
                    $isFileMoved = move_uploaded_file(
                        $_FILES['json_file']['tmp_name'],
                        UPLOADS_DIR.$hashFileName
                    );
                    if ($isFileMoved) {
                        header('Location: index.php?action=statistics');
                        exit;
                    }
                } else {
                    echo "<script>alert('Завеликий файл! Розмір до 5мб')</script>";
                }
            } else {
                echo "<script>alert('Невірне розширення файла!')</script>";
            }
        } else {
            echo "<script>alert('Помилка завантаження :( \n Спробуйте ще раз...')</script>";
        }
    }
}
