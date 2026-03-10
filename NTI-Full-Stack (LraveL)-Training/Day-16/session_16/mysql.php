<?php
require_once "index.php";
use index\DataBase;

class mysql implements DataBase{

private $dbconn ;
public function __construct($dsn , $userName , $password='')
{
    $this->dbconn = new PDO($dsn,$userName,$password);
}

public function select($column,$table,$codation ,$operator,$value){
    $query ="SELECT $column FROM $table WHERE $codation $operator $value";
}
 public function insert(){}
    public function update(){}
    public function delete(){}
    public function selectAll(){}


}