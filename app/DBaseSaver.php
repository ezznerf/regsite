<?php
namespace App;

class DBaseSaver
{
   public function SQLSave($uname,$upassword, $ubday, $uphone, $uemail)
   {

       $mysql = new mysqli('localhost','root', '', 'regsite');
       $fullName = explode(" ",$uname);
       $name = $fullName[0];
       $surname = $fullName[1];
       $patronymic = $fullName[2];
       $mysql->query("INSERT INTO `users`(`name`,`surname`,`patronymic`,`pass`, `bday`, `pnumber`, `email`)VALUES ('$name','$surname','$patronymic','$upassword','$ubday','$uphone','$uemail')");

       $mysql->close();
   }

}