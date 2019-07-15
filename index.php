<?php
define ('execute',1);
define('DS', DIRECTORY_SEPARATOR);
define('PATH_BASE', dirname(__FILE__));

if ( file_exists(PATH_BASE.DS.'includes'.DS.'defines.php') ){
	require_once PATH_BASE.DS.'includes'.DS.'defines.php';
}
if ( file_exists(PATH_BASE.DS.'includes'.DS.'init.php') ){
	require_once PATH_BASE.DS.'includes'.DS.'init.php';
}

require_once(PATH_BASE.DS.'template'.DS.'index.php');