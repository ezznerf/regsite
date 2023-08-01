<?php
namespace App;
require_once ('../vendor/autoload.php');
class SaveToBase extends AbstractSaver
{
//    private $name;
//    private $bday ;
//    private $pnumber;
//    private $email;
    public function __construct()
    {
        $this->name =$_POST['name'];
        $this->bday =$_POST['bday'];
        $this->pnumber =$_POST['pnumber'];
        $this->email =$_POST['email'];
    }
    public function writeToTextBase()
    {
        
        $basename = "../base/text/".$this -> email. ".txt";  
        $text ="\n". $this -> name ."\n" . $this -> bday . "\n".  $this -> pnumber . "\n" . $this ->email . "\n";   
        $base = fopen($basename, "w");
        fwrite($base, $text);
        fclose($base);
    }

    public function writeToSerialBase()
    {
        $user = new User($this->name, $this->bday, $this->pnumber, $this->email);
        $basename = "../base/serial/".$this -> email. ".txt";
        //$text = "\n".serialize($this -> name) ."\n" . serialize($this -> bday) . "\n".  serialize($this -> pnumber) . "\n" . serialize($this ->email) . "\n";
        $text = serialize($user);
        $base = fopen($basename, "w");
        fwrite($base, $text);
        fclose($base);
    }
}