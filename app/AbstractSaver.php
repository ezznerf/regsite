<?php
abstract class AbstractSaver
{
    private $name;
    private $bday ;
    private $pnumber;
    private $email;
    abstract public function writeToTextBase();
    abstract public function writeToSerialBase();
}