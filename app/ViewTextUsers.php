<?php
namespace App;
require_once ('../vendor/autoload.php');
class ViewTextUsers implements ViewInterface 
{
    private  $dirname;
    public function __construct(string $dirname){
        $this -> dirname = $dirname;
    }
    public function TextReader(){
        $files = scandir($this -> dirname);
        foreach ($files as $v){
            echo "<br>";
            if ($v !="." && $v !=".."){
                $file = file($this -> dirname.$v);
                echo "<div class = 'border'";

                foreach($file as $val){
                    echo $val. "<br>";
                    if (stristr($val, '@')){
                        echo "<br>";
                        echo "</div>";
                    }
                }
            }
        }
    }
    public function SerialReader(){
        $files = scandir($this -> dirname);
        foreach ($files as $v){
            echo "<br>";
            if ($v !="." && $v !=".."){
                $file = file($this -> dirname.$v);
                echo "<div class = 'border'";

                foreach($file as $val){
                    if($val != "\n"){
                        echo(unserialize($val));
                        echo '<br>';
                    }else{
                        echo '<br>';
                    }
                    if (stristr($val, '@')){
                        echo "<br>";
                        echo "</div>";
                    }
                }
            }
        }
    }

    public function getDirname(){
        return $this -> dirname;
    }
    public function setDirname($dirname){
        $this->dirname = $dirname;
        return $this;
    }
}