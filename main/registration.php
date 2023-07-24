<?php
//require "../app/Database.php";
//?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/design.css">
</head>
<body>
    <div class=container >
        <h2>Форма Регистрации</h2>
        <br>
        <h2 id="user">пользователя</h2>
        <form class="forma" action="" method="POST" id="forma" name="forma" >
            <div class=reg-form>
                <label for="name">ФИО</label>
                <input type="text" id="name" name="name"
                placeholder="Иванов Иван Иванович">
            </div>
            <div class=reg-form>
                <label for="bday">Дата рождения</label>
                <input type="date" id="bday" name="bday"
                placeholder="дд.мм.гггг.">
            </div>
            <div class=reg-form>
                <label for="pnuber">Номер телефона</label>
                <input type="text" id="pnumber" name="pnumber"
                placeholder="+7777777777">
            </div>
            <div class=reg-form>
                <label for="email">Почта</label>
                <input type="email" id="email"name="email"
                placeholder="example@mail.ussr">
            </div>
            <div id ="btn">
            <input type="submit" value="Регистрация" id="button">
            </div>
        </form>
       
        <div id="href1">
            <a href = "readerText.php">Skip text reg</a>
            </div>
            <div id="href2">
<!--            <a href = "readerSerialize.php">Skip serialize reg</a>-->
            </div>
            <script src="app.js"></script>
            <div id="saver">
                <select name="save_method" id="save_method">
                    <option value="text">Сохранинь в текстовом файле</option>
<!--                    <option value="serialize">Сохранить в сериализованном текстовом файле</option>-->
                </select>
            </div>
            
    </div>

 

</body>
</html>