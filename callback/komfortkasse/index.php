<?php
/**
 * Komfortkasse
 * routing
 *
 * @version 1.7.7-gambio
 */

ini_set('default_charset', 'utf-8');

//  error_reporting(E_ALL);
ini_set('display_errors', '0');



if (!array_key_exists('komfortkasse_no_include', $_GET) && !array_key_exists('komfortkasse_no_include', $_POST)) {
	$basepath = explode('callback', $_SERVER['SCRIPT_FILENAME']) ;
	require_once ($basepath[0].'includes/configure.php');
	if (file_exists(DIR_FS_CATALOG . 'gm/inc/gm_get_conf.inc.php'))
	    require_once (DIR_FS_CATALOG . 'gm/inc/gm_get_conf.inc.php');
	require_once (DIR_WS_INCLUDES.'application_top_callback.php');
}
include_once 'Komfortkasse.php';


$action = Komfortkasse_Config::getRequestParameter('action');

$kk = new Komfortkasse();
$kk->$action();
//call_user_method($action, );

?>