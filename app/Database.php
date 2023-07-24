<?php

class Database
{
    protected $mysql;
    public function sql()
    {
        $this->mysql = new mysqli('localhost', 'root', '', 'regsite');
    }
    public function sqlKill()
    {
        $this->mysql->close();
    }
}












//$dbhost = "localhost";
//$dbname = "regsite";
//$username = "root";
//$password = "root";
//
//$db = new PDO("mysql:host=$dbhost; dbname = $dbname", $username, $password);