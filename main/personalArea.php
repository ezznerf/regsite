
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/personalArea.css">
</head>
<body>
    <form class="container">
        <?php
        require_once ('../app/Auth.php');
        $userCheck= new Auth();
        $userCheck->checkUser($_POST['email'], $_POST['password']);
        $userCheck->viewUser();
        ?>
    <input type="submit" id="changeMail" value="Изменить почту">
    <input type="submit" id="changePass" value="Изменить пароль">
    <input type="submit" id="exit" value="Выход">
</form>    
</body>
</html>


