<?php
require_once ('../app/SqlBuilder.php');
$builder = new SqlBuilder();
<<<<<<< HEAD
$SQL = $builder->select('id, name, surname, patronymic')
    ->from('users')
    ->where('id > 1')
    ->sqlResult();
$mysql = new mysqli('localhost','root', '', 'regsite');
$result = $mysql->query($SQL)->fetch_all(MYSQLI_ASSOC);
=======
$login = "gruich@mail.ru";
$password = "123";
$SQL = $builder->select('*')
    ->from('users')
    ->where("`email` ='$login' AND `pass` = '$password'")
    ->sqlResult();
$connect = mysqli_connect('localhost', 'root', 'root', 'regsite');
$mysql = mysqli_query($connect, $SQL);
$result = $mysql->fetch_all(MYSQLI_ASSOC);

>>>>>>> fe615170a76663f7852677fb53d791703ae5e81c
?>

<div>
    <?php foreach($result as $row): ?>
        <div><?= $row['id'] ?></div>
        <div><?= $row['name'] ?></div>
        <div><?= $row['surname'] ?></div>
        <div><?= $row['patronymic'] ?></div>
    <?php endforeach ?>
</div>



