<?php
namespace App;
interface AuthInterface
{
    public function checkUser($login, $password);
    public function viewUser();
    public function echoMessage($msg);
}