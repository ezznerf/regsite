
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    require_once("SaveToTextBase.php");
    $newPerson = new SaveToTextBase();
    $newPerson -> writeToBase();
    ?>
    <div id="alerts" class="alerts">
        <h2>Сохранение в текстовый файл прошло успешно<h2>
    </div>

    <div id="container1">
        <form action="index.php">
            <button id="btn">Вернуться на главную</button>
        </form>
    </div>
    <div id="container2">
        <form action="">
            <button id="btn2">Все пользователи</button>
        </form>
    </div>

    

</body>
</html>