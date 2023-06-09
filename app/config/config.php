<?php

//App Root
define('APPROOT', dirname(dirname(__FILE__)));
//URL Root
define('URLROOT', 'http://localhost/thanhdoanvinh');
//Site Name
define('SITENAME', 'Đoàn Thanh Niên Thành Phố Vinh');
//App Version
define('APPVERSION', '0.2.0');

//Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'izfaqdfz_webdoan');
define('DB_CHARSET', 'utf8');

define('LOAI_VAN_BAN', [
    'thanhdoan' => 1,
    'coso' => 2,
]);

define("DS", "/");
define("TEMP_DIR", "");
define("BASE_DIR", $_SERVER['DOCUMENT_ROOT']);
define("ROOT_DIR", BASE_DIR . DS . TEMP_DIR);
define("TIN_TUC_UPLOAD_DIR", '/assets/img/tintuc/');