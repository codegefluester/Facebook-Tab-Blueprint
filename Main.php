<?php

require_once 'DevConfig.php';
require_once 'lib/facebook/facebook.php';

$config = array();
$config['appId'] = FB_APP_ID;
$config['secret'] = FB_SECRET;
$config['fileUpload'] = FB_FILEUPLOAD; // optional

$facebook = new Facebook($config);
$signed_request = $facebook->getSignedRequest();

if($signed_request) {
	define("IS_PAGE_ADMIN", $signed_request['page']['admin']);
	define("IS_PAGE_FAN", $signed_request['page']['liked']);
}


if(DEV_MODE) {
	error_reporting(E_ALL);
	ini_set("display_errors", TRUE);
	echo '<pre>';
		print_r($signed_request);
	echo '</pre>';
} else {
	error_reporting(0);
	ini_set("display_errors", FALSE);
}

?>