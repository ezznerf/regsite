
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <?php
    require_once("../app/SaveToBase.php");
    $newPerson = new SaveToBase();
    $newPerson -> writeToTextBase();

    require_once("../app/DBaseSaver.php");
    $newUser = new DBaseSaver();
    $newUser->SQLSave($_POST['name'], $_POST['password'], $_POST['bday'], $_POST['pnumber'], $_POST['email']);
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
        <form action="readerText.php">
            <button id="btn2">Все пользователи</button>
        </form>
    </div>

    

</body>
</html>