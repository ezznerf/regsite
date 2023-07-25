
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style3.css">
</head>
<body>
  <div class="container">

    <h2>Аутентификация</h2>
    <form class="forma" action="personalArea.php" method="POST" name="forma">
        <div class="reg-form">
            <label for="email">EMAIL</label>
            <input type="email" id="email" name="email"
            placeholder="Insert your email">
        </div>
        <div class="reg-form">
            <label for="password">PASSWORD</label>
            <input type="password" id="password" name="password"
            placeholder="Insert your password">
        </div>
        <div id="btn">
            <input type="submit" value="Sing in" id="button">
        </div>
    </form>
      <form class="result">
        <?php
          session_start();
          echo $_SESSION['message']
          ?>
      </form>
  </div>

</body>
</html>