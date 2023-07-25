<?php
require_once ('../app/SqlBuilder.php');
$builder = new SqlBuilder();
$login = "gruich@mail.ru";
$password = "123";
$SQL = $builder->select('*')
    ->from('users')
    ->where("`email` ='$login' AND `pass` = '$password'")
    ->sqlResult();
$connect = mysqli_connect('localhost', 'root', 'root', 'regsite');
$mysql = mysqli_query($connect, $SQL);
$result = $mysql->fetch_all(MYSQLI_ASSOC);

?>

<div>
    <?php foreach($result as $row): ?>
        <div><?= $row['id'] ?></div>
        <div><?= $row['name'] ?></div>
        <div><?= $row['surname'] ?></div>
        <div><?= $row['patronymic'] ?></div>
    <?php endforeach ?>
</div>



