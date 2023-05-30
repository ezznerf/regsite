<?
class ViewTextUsers 
{
    private string $filename;
    public function __construct(string $filename){
        $this -> filename = $filename;


    }
    public function Reader(){
        $file = file("../base" .$this->filename);
        foreach ($file as $value) {
            
        }
    }
}