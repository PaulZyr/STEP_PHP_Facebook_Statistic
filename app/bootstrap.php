<?php

ini_set('display_error', true);
ini_set('display_startup_error', true);
ini_set('log_errors', true);
ini_set('error_log', __DIR__.'/logs/errors.log');

error_reporting(E_ALL);

define('FILE_JSON_MAX_SIZE', 5 * 1048576);

define('CONTROLLERS_DIR', __DIR__.'/controllers/');
define('UPLOADS_DIR', __DIR__.'/uploads/');
define('VIEWS_DIR', __DIR__.'/views/');
define('APP_DIR', __DIR__);

require_once __DIR__.'/routes.php';