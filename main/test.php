<?php
require_once ('../app/SqlBuilder.php');
$builder = new SqlBuilder();
$SQL = $builder->select('id, name, surname, patronymic')
    ->from('users')
    ->where('id > 1')
    ->sqlResult();
$mysql = new mysqli('localhost','root', '', 'regsite');
$result = $mysql->query($SQL)->fetch_all(MYSQLI_ASSOC);
?>

<div>
    <?php foreach($result as $row): ?>
        <div><?= $row['id'] ?></div>
        <div><?= $row['name'] ?></div>
        <div><?= $row['surname'] ?></div>
        <div><?= $row['patronymic'] ?></div>
    <?php endforeach ?>
</div>



