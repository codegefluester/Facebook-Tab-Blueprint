<?php

if(is_file("DevConfig.php")) require_once 'DevConfig.php';
else require_once 'Config.php';

if(DEV_MODE) {
	error_reporting(E_ALL);
	ini_set("display_errors", TRUE);
}


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
	define("USER_LOCALE", $signed_request['user']['locale']);
	define("USER_AGE", $signed_request['user']['age']['min']);
	define("USER_COUNTRY", $signed_request['user']['country']);
	if(isset($signed_request['user_id'])) {
		define("USER_ID", $signed_request['user_id']);
	}
	$page = $facebook->api("/" . $signed_request['page']['id'], 'GET');
}


if(DEV_MODE) {
	echo '<pre>';
		print_r($signed_request);
		print_r($page);
	echo '</pre>';
} else {
	error_reporting(0);
	ini_set("display_errors", FALSE);
}

?>