<?php
require_once ('SqlBuilderInterface.php');
class SqlBuilder implements SqlBuilderInterface
{
    private $sql;
    public function __construct()
    {
        $this->sql='';
    }
    public function select(string $request):self
    {
        $this->sql.= ' SELECT ' . $request;

        return $this;
    }
    public function from(string $request):self
    {
        $this->sql.= ' FROM ' . $request;

        return $this;
    }
    public function where(string $request):self
    {
        $this->sql.= ' WHERE ' . $request;

        return $this;
    }

    public function limit(string $request):self
    {
        $this->sql.= ' LIMIT ' . $request;

        return $this;
    }
    public function sqlResult():string
    {
        $result = $this->sql . ';';

        return $result;
    }
}
