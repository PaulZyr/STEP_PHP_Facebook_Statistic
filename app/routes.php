<?php

$action = 'form';

if (isset($_GET['action'])) {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
}

require_once CONTROLLERS_DIR.'HeaderController.php';
require_once CONTROLLERS_DIR.'FormController.php';

switch ($action) {
    case 'upload':
        require_once CONTROLLERS_DIR.'UploadController.php';
        break;
    case 'statistics':
        require_once CONTROLLERS_DIR.'StatisticController.php';
        break;
}

require_once CONTROLLERS_DIR.'FooterController.php';
