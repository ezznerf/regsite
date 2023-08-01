<?php
namespace App;
interface SqlBuilderInterface
{
    public function select(string $request);
    public function where(string $request);
    public function from(string $request);
    public function limit(string $request);
    public function update(string $request);
    public function set(string $request);
    public function sqlResult();
}