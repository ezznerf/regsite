<?php
interface ViewInterface 
{
    public function TextReader();
    public function SerialReader();
    public function Cout();
    public function getDirname();
    public function setDirname($dirname);
}