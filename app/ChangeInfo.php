<?php
namespace App;
require_once ('../vendor/autoload.php');
class ChangeInfo extends SqlBuilder
{
    public function chEmail($newEmail, $oldEmail)
    {
        $builder = new SqlBuilder();
        $SQL = $builder ->update('users')
                        ->set("`email` = '$newEmail'")
                        ->where("users . email = '$oldEmail'")
                        ->sqlResult();

        $mysql = new mysqli('localhost','root', 'root', 'regsite');
        $mysql->query($SQL);
        $mysql->close();


    }
}