<?php
require_once ('../vendor/autoload.php');
$userCheck= new App\Auth();
$userCheck->checkUser($_POST['email'], $_POST['password']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/personalArea.css">
</head>
<body>
<div class="container">
    <?php

    $userCheck->viewUser();
    ?>
    <form class="changeEmail" action="changeEmail.php">
        <input type="submit" id="changeMail" value="Изменить почту">
    </form>
<!--    <form class="container" action="" >-->
<!--        <input type="submit" id="changePass" value="Изменить пароль">-->
<!--    </form>-->
<!--    <form class="container" action="" >-->
<!--        <input type="submit" id="exit" value="Выход">-->
<!--    </form>-->
</form>
</div>
</body>
</html>