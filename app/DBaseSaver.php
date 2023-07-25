<?php


class DBaseSaver
{
   public function SQLSave($uname, $ubday, $uphone, $uemail)
   {

       $mysql = new mysqli('localhost','root', 'root', 'regsite');
       $fullName = explode(" ",$uname);
       $name = $fullName[0];
       $surname = $fullName[1];
       $patronymic = $fullName[2];
       $mysql->query("INSERT INTO `users`(`name`,`surname`,`patronymic`, `bday`, `pnumber`, `email`)VALUES ('$name','$surname','$patronymic','$ubday','$uphone','$uemail')");

       $mysql->close();
   }

}