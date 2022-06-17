<?php

    if(defined('CONFIGURATION_DONE') && CONFIGURATION_DONE == true) // if no configuration have been done yet
    {
        echo "Configuration already done";
    }    
    else
    {
        require "config/config.php";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo(APP_NAME); ?></title>
</head>
<body>
    <?php
        require "controllers/main.php";
    ?>
</body>
</html>