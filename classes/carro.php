<?php
//Definicao da classe carro
class carro{
    //definir os atributos
    //podem ser public, private ou protected
    private string $modelo;
    private string $fabricante;
    private int $ano;
    private string $cor;
    private string $motor;

    //métodos get | set
    //o GET é utilizado toda vez que queremos utilizar o valor inserido no atributo
    //O SET é utilizado toda vez que queremos inserir um valor no atributo

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($modelo_usuario){
        $this->modelo = $modelo_usuario;
    }

    public function getFabricante(){
        return $this->fabricante;
    }

    public function setFabricante($fabricante_usuario){
        $this->fabricante = $fabricante_usuario;
    }

    public function getAno(){
        return $this->ano;
    }

    public function setAno($ano_usuario){
        $this->ano = $ano_usuario;
    }

    public function getCor(){
        return $this->cor;
    }

    public function setCor($cor_usuario){
        $this->cor = $cor_usuario;
    }

    public function getMotor(){
        return $this->motor;
    }

    public function setMotor($motor_usuario){
        $this->motor = $motor_usuario;
    }
}

?>