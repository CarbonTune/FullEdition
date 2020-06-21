<?php
        require_once ('appconfig.php');
        header("Refresh: 300");
        $verifyCode = ACCESSCODE; 
        $provideCode = $_GET['ovr'];
        
        while ($provideCode == $verifyCode) {
            echo "<center><h1 style='color: red;'>ADMIN OVERRIDE</h1>";
            if (ALLOW_CLOSURE_OVERRIDES == 'false') header("Location: blocked.php?type=override");
            break;
        }
        
        if ($provideCode == "" && GUEST_REQUESTS_ENABLE == 'false') {
            header("Location: blocked.php?type=guest");
            
        }
        
?>

<!DOCTYPE HTML>
<html class='rqLoad'>
    <head>
        <title>CarbonTune</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body class='rqLoad'>
        <div>
                <iframe src="<?php echo constant('RQAREA_URL'); ?>" id="force-mobile" class="second-row" width="640" height="1375"></iframe>
        </div>
</body>
</html>