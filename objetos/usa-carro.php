<?php
require_once("../classes/carro.php");

//para usar a classe criamos um objeto que nada mais é que uma instancia da classe
$car = new Carro();

$car->setModelo("ARGO");
$car->setFabricante("FIAT");
$car->setAno(2022);
$car->setCor("VERMELHO MONTE CARLO LISO");
$car->setMotor("Stellantis 1.0 turbo");

echo"Modelo: ". $car->getModelo();
echo "<br>";
echo "Fabricante: ". $car->getFabricante();
echo "<br>";
echo "Ano: ". $car->getAno();
echo "<br>";
echo "Cor: ". $car->getCor();
echo "<br>";
echo "Motor: ". $car->getMotor();

?>