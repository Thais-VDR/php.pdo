<?php
require_once("../classes/pessoa.php");

$person = new Pessoa();
$person->__set("nome","Thaís Vitória");
$person->__set("Sobrenome","Dias Rosa");
$person->__set("ano_nasc", 2000);
echo $person->__get("nome");
echo "<br>";
echo $person->__get("Sobrenome");
echo "<br>";
if($person->__day() == 0){
    echo "sua idade";

}
else{



echo $person->__get("ano_nasc");
echo "<br>";
echo $person->__calc();
echo "<br>";
echo $person->__day();
}
?>
