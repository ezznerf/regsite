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
<form class="forma" action="personalArea.php" method="POST" name="forma">
    <div class="reg-form">
        <label for="old_password">Старый пароль</label>
        <input type="email" id="email" name="email"
               placeholder="Insert your email">
    </div>
    <div class="reg-form">
        <label for="new_password">Новый пароль</label>
        <input type="password" id="password" name="password"
               placeholder="Insert your password">
    </div>
    <div class="reg-form">
        <label for="2nd_new_password">Повторите новый пароль</label>
        <input type="password" id="password" name="password"
               placeholder="Insert your password">
    </div>
    <input type="submit" name="btn" value="изменить пароль">
</form>
</body>
</html>