<?php

class pessoa{

 private string $nome;
 private int $ano_nasc;
 private string $sobrenome;
 private int $idade;
 
public function __set($nome, $ano_nasc)
 {
$this->$nome = $ano_nasc;
 }
public function __get($nome)
{
return $this->$nome;
}
public function __calc()
{
return date ("Y") - $this-> ano_nasc;
}
public function __day(){
 return $this->__calc() * 365;
}
}

?>
