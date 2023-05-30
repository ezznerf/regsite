<?php
abstract class AbstractSaver
{
    private $name;
    private $bday ;
    private $pnumber;
    private $email;
    abstract public function writeToBase();
    abstract public function Messager();
}