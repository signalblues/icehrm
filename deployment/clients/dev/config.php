<?php 
ini_set('error_log', 'data/icehrm.log');

define('CLIENT_NAME', 'icehrmpro');
define('APP_BASE_PATH', '/vagrant/build/app/core/');
define('CLIENT_BASE_PATH', '/vagrant/deployment/clients/dev/');
define('BASE_URL','http://app.app.dev/web/');
define('CLIENT_BASE_URL','http://clients.app.dev/dev/');

define('APP_DB', 'dev');
define('APP_USERNAME', 'dev');
define('APP_PASSWORD', 'dev');
define('APP_HOST', 'localhost');
define('APP_CON_STR', 'mysqli://'.APP_USERNAME.':'.APP_PASSWORD.'@'.APP_HOST.'/'.APP_DB);

//file upload
define('FILE_TYPES', 'jpg,png,jpeg');
define('MAX_FILE_SIZE_KB', 10 * 1024);
