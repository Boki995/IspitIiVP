<?php

class DatabaseConfiguration{
private $host;
private $user;
private $pass;
private $name;

public function __constructor(string $host,string $user,string $pass,string $name){

    $this->host=$host;
    $this->user=$user;
    $this->pass=$pass;
    $this->name=$name;  


}

public function getSourceString(): string{
    return "mysql:host={$this->host};dbname={$this->name};charset=utf8";

}

public function getUser(): string{

return $this->user; 




}
public function getPass(): string{

return $this->pass;

}

}