<?php
    header("Refresh: 300");	
	require_once('appconfig.php');
	
	$getType = $_GET['type'];
	$accessCode = ACCESSCODE;
	
	if ($getType == 'guest' && GUEST_REQUESTS_ENABLE == 'true') header("Location: rqLoad.php");
	if ($getType == 'override' && ALLOW_CLOSURE_OVERRIDES == 'true') header("Location: rqLoad.php?ovr=$accessCode");

?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>CarbonTune</title>
    <link rel="stylesheet" href="css/splash.css" />
    <link rel="stylesheet" href="css/branding.css" />
  </head>
  <body>
    <div id="wrap">
      <!-- Header Block -->
      <div id="head">
        <h1 id="product_logo">
          <span class="pl_LEFT">Carbon</span>
          <span class="pl_RIGHT">Tune</span>
        </h1>
      </div>
      <br>
      <!-- Page Content Block -->
      <div id="page_content">
        <p>
          Song requests are not available right now. Enjoy the party!
        </p>
      </div>
      <div id="footer">
        <p>
          <a href="https://ygco.ca/CarbonTune" target="_new">CarbonTune v7</a><br>
          &copy; 2020 Nathan Dick. All Rights Reserved.
        </p>
      </div>
      
    </div>
  </body>  
</html>