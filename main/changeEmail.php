<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form class="forma" action="success.php" method="POST" name="forma">
    <div class="reg-form">
        <label for="oldEmail">Старый почта</label>
        <input type="email" id="email" name="oldEmail"
               placeholder="Insert your email">
    </div>
    <div class="reg-form">
        <label for="newEmail">Новый почта</label>
        <input type="email" id="email" name="newEmail"
               placeholder="Insert your email">
    </div>
    <input type="submit" name="btn" value="изменить почту">
</form>
</body>
</html>