<?php
namespace App;
class User
{
    protected $name;
    protected $bday ;
    protected $pnumber;
    protected $email;

    public function __construct ($name, $bday, $pnumber, $email){
        $this->name = $name;
        $this->bday = $bday;
        $this->pnumber = $pnumber;
        $this->email = $email;
    }
}