<?php

var_dump($_SERVER);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Host: <?php echo $_SERVER["HTTP_HOST"]?></li>
        <li>Document root: <?php echo $_SERVER["DOCUMENT_ROOT"]?></li>
        <li>Server name: <?php echo $_SERVER["SERVER_NAME"]?></li>
        <li>Server port: <?php echo $_SERVER["SERVER_PORT"]?></li>
        <li>Current file dir: <?php echo $_SERVER["PHP_SELF"]?></li>
        <li>Request for URI: <?php echo $_SERVER["REQUEST_URI"]?></li>
        <li>Server software: <?php echo $_SERVER["SERVER_SOFTWARE"]?></li>
        <li>Client info: <?php echo $_SERVER["HTTP_USER_AGENT"]?></li>
        <li>Remote address <?php echo $_SERVER["REMOTE_ADDR"]?></li>
        <li>Remote port <?php echo $_SERVER["REMOTE_PORT"]?> </li>
        <li>Request scheme <?php echo $_SERVER["REQUEST_SCHEME"]?></li>
        <li>Gateway interface <?php echo $_SERVER["GATEWAY_INTERFACE"]?></li>
        <li>Script name <?php echo $_SERVER["SCRIPT_NAME"]?></li>
        <li>MIBDIRS <?php echo $_SERVER["MIBDIRS"]?></li>

    </ul>
</body>
</html>