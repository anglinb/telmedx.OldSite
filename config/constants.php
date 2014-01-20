<?php
//Here is where all the constants will be defined
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define('SITE_ROOT',$_SERVER['DOCUMENT_ROOT'].DS."..");
defined('LIB_PATH') ? null : define('LIB_PATH',SITE_ROOT.DS."includes");
defined('BASE_PATH') ? null : define('BASE_PATH',SITE_ROOT.DS."public_includes");

?>
