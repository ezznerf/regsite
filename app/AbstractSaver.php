<?php
abstract class AbstractSaver
{
    protected $name;
    protected $bday ;
    protected $pnumber;
    protected $email;
    abstract public function writeToTextBase();
    abstract public function writeToSerialBase();
    public function setName($name){
        $this->name = $name;
        return $this;
    }
    public function getName($name){
        return $this -> name;
    }
    public function setBday($bday){
        $this->name = $bday;
        return $this;
    }
    public function getBday($bday){
        return $this -> bday;
    }
    public function setPnumber($pnumber){
        $this->name = $pnumber;
        return $this;
    }
    public function getPnumber($pnumber){
        return $this -> pnumber;
    }
    public function setEmail($email){
        $this->name = $email;
        return $this;
    }
    public function getEmail($email){
        return $this -> email;
    }
}