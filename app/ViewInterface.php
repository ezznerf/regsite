<?php
namespace App;
interface ViewInterface 
{
    public function TextReader();
    public function SerialReader();
    public function getDirname();
    public function setDirname($dirname);
}