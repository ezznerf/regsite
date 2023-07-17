<?php

class DBaseSaver
{
   public function SQLSave($uname, $ubday, $uphone, $uemail)
   {

       $mysql = new mysqli('localhost','root', 'root', 'regsite');
       $mysql->query("INSERT INTO `users`(`name`, `bday`, `phone`, `email`)VALUES ('$uname', '$ubday', '$uphone', '$uemail')");

       $mysql->close();
   }

}