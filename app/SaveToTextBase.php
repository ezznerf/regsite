<?php
require_once('AbstractSaver.php');
class SaveToBase extends AbstractSaver
{
    public function writeToBase()
    {
        $basename = "../base/text/".$this -> email. ".txt";  
        $text ="\n". $this -> name ."\n" . $this -> bday . "\n".  $this -> pnumber . "\n" . $this ->email . "\n";   
        $base = fopen($basename, "w");
        fwrite($base, $text);
        fclose($base);
    }
    public function __construct()
    {
        $this -> name = $_POST["name"];
        $this -> bday = $_POST["bday"];
        $this -> pnumber = $_POST["pnumber"];
        $this -> email = $_POST["email"];
    }
    public function Messager(){
        echo "<h1>Save was Succesfully to text file</h1>";
    }
    
}
