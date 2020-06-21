<?php 
/**
 * Display Board - Bootstrap Layout
 * Display works best on 22-inch or larger screens. Does not work on mobile devices.
 * No real editable content here. All constants defined in appconfig.php
 * 
 * Made by Nathan Dick - www.ygco.ca
 * Copyright (C) 2019-2020 Nathan Dick. All Rights Reserved.
 *
 */
 
/** Automatically reload every 30 minutes (1800 seconds) */
header("Refresh: 1800");

/** Load Config Settings */
require_once("appconfig.php");

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>CarbonTune</title>

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">

	</head>
<body class="display">

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
                <h1 id="product_logo">
                    <span class="pl_LEFT">Carbon</span>
                    <span class="pl_RIGHT">Tune</span>
                </h1>
			</div>
			<div class="col-md-4"><!--Middle Box Upper--></div>
			<div class="col-md-4 messageTopRight">
			    <?php echo constant("PARTY_MESSAGE_TOPRIGHT"); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 queueViewer">
			    <iframe style="border: none;" class="queueFrame" src="<?php echo constant("TVMODE_URL"); ?>" width="100%">Iframe not working. Use Chrome.</iframe>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 ipNotice">
			    &copy; 2020 Nathan Dick.
			</div>
			<div class="col-md-4"><!-- Middle Box Lower --></div>
			<div class="col-md-4 messageBottomRight">
                <?php 
                /* ECHO OUT COUNTDOWN TO OPEN MODULE */
                    if (GUEST_REQUESTS_ENABLE == 'true') {
                        echo "Song Requests now open &mdash; " . constant("REQUEST_LINK");
                    }
                    else {
                        echo constant("PARTY_MESSAGE_BOTTOMRIGHT");
                    }
                ?>
			</div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>
</body>
</html>