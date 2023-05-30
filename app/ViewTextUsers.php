<?
require_once ("ViewInterface.php");
class ViewTextUsers implements ViewInterface 
{
    private string $dirname;
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
                    echo unserialize($val). "<br>";
                    if (stristr($val, '@')){
                        echo "<br>";
                        echo "</div>";
                    }
                }
            }
        }
    }
    public function Cout(){

    }
    public function getDirname(){
        return $this -> dirname;
    }
}