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
			
		</div>
		<script>
		  window.fbAsyncInit = function() {
		    FB.init({
		      appId      : TabConfig.appId, // App ID
		      channelUrl : TabConfig.channelUrl, // Channel File
		      status     : TabConfig.status, // check login status
		      cookie     : TabConfig.cookie, // enable cookies to allow the server to access the session
		      xfbml      : TabConfig.xfbml  // parse XFBML
		    });
		
		    // Additional initialization code here
		    if(TabConfig.autosize) FB.Canvas.setAutoGrow(TabConfig.autosizeInterval);
		  };
		
		  // Load the SDK Asynchronously
		  (function(d){
		     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement('script'); js.id = id; js.async = true;
		     js.src = "//connect.facebook.net/" + TabConfig.locale + "/all.js";
		     ref.parentNode.insertBefore(js, ref);
		   }(document));
		</script>
	</body>
</html>