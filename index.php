<?php require_once 'Main.php'; ?>
<!Doctype html>
<html>
	<head>
		<!-- Basic CSS -->
		<link rel="stylesheet" type="text/css" href="public/css/tab.css" />
		<!-- Your custom CSS -->
		<link rel="stylesheet" type="text/css" href="public/css/custom.css" />
		<!-- Basic config -->
		<script type="text/javascript" src="public/js/config.js"></script>
		<!-- Your custom JavaScript -->
		<script type="text/javascript" src="public/js/custom.js"></script>
	</head>
	<body class="full">
		<div id="wrapper">
			<header>
				<!-- Put your header here -->
			</header>
			<section id="content">
				<h1>Hello Blueprint!</h1>
				<p>You're<strong><?=IS_PAGE_FAN ? ' a ' : ' not a ';?></strong> fan of <?=$page['name']?></p>
				<p>You're<strong><?=IS_PAGE_ADMIN ? ' an ' : ' not an ';?></strong> admin of <?=$page['name']?></p>
			</section>
			<footer>
				<!-- Put your footer here -->
			</footer>
		</div>
		<div id="fb-root"></div>
		<script>
		  window.fbAsyncInit = function() {
		    FB.init({
		      appId		: '<?=FB_APP_ID?>', // App ID
		      status	: true, // check login status
		      cookie	: true, // enable cookies to allow the server to access the session
		      xfbml     : true  // parse XFBML
		    });
		
		    // Additional initialization code here
		    if(TabConfig.autosize) FB.Canvas.setAutoGrow(TabConfig.autosizeInterval);
		  };
		
		  // Load the SDK Asynchronously
		  (function(d){
		     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement('script'); js.id = id; js.async = true;
		     js.src = "//connect.facebook.net/" + <?=USER_LOCALE?> + "/all.js";
		     ref.parentNode.insertBefore(js, ref);
		   }(document));
		</script>
	</body>
</html>