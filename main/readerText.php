<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style2.css">
</head>
<body>
    <div id="btn">
        <form action="registration.php">
            <button id="button">На главную</button>
        </form>
    </div>
<?php
require_once("../vendor/autoload.php");
$readinfo = new App\ViewTextUsers("../base/text/");
$readinfo -> TextReader();
?>
</body>
</html>