<?php
require_once('AbstractSaver.php');
class SaveToSerializeBase extends AbstractSaver
{
    public function __construct(){
        $this -> name = $_POST["name"];
        $this -> bday = $_POST["bday"];
        $this -> pnumber = $_POST["pnumber"];
        $this -> email = $_POST["email"];
    }
    public function writeToBase()
    {
        $basename = "../base/serial/".$this -> email. ".txt";  
        $text = serialize($this -> name) ."\n" . serialize($this -> bday) . "\n".  serialize($this -> pnumber) . "\n" . serialize($this ->email) . "\n";   
        $base = fopen($basename, "w");
        fwrite($base, $text);
        fclose($base);
    }
    public function Messager()
    {
        echo "<h1>Save was Succesfully to serialize file</h1>";

    }
}
