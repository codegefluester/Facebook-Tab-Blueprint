<?php

require_once 'Config.php';
require_once 'lib/facebook/facebook.php';

$config = array();
$config['appId'] = FB_APP_ID;
$config['secret'] = FB_SECRET;
$config['fileUpload'] = FB_FILEUPLOAD; // optional

$facebook = new Facebook($config);

?>