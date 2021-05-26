<?php
$now = new \DateTime();
$lastFile = null;
$dir = new DirectoryIterator(UPLOADS_DIR);
$modTime = 0;
foreach ($dir as $fileInfo) {
    if (!$fileInfo->isDot()) {
        $parts_path = pathinfo($fileInfo->getFilename());
        if (
            $parts_path['extension'] == 'json'
            && $modTime < filemtime(UPLOADS_DIR.$fileInfo->getFilename())
        ) {
            $lastFile = $fileInfo->getFilename();
        }
    }
}

$data = json_decode(
    file_get_contents(
        UPLOADS_DIR.$lastFile
    ),
    true
);

require_once VIEWS_DIR.'statistic.php';
