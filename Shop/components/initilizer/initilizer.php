<?php
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].DS.'Shop');
defined('LIB_PATH') ? null : define ('LIB_PATH',SITE_ROOT.DS.'components');

//load database configaration first;
require_once(LIB_PATH.DS."database/db.php");
require_once(LIB_PATH.DS."database/queries/query.php");
require_once(LIB_PATH.DS."auth/crypto/crypto.php");
require_once(LIB_PATH.DS."auth/Api/apiRegistration.php");
require_once(LIB_PATH.DS."auth/Api/ApiSign.php");


//require_once(LIB_PATH.DS."assets/404.html");


?>