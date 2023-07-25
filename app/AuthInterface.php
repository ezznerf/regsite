<?php

interface AuthInterface
{
    public function checkUser($login, $password);

}