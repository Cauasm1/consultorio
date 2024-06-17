<?php
class consultorio

{
    private $nome;
    private $anoNasc;
    private $peso;
    private $altura;

    public function __construct()
    {
        $this->nome = "";
        $this->anoNasc = 0;
        $this->peso = 0;
        $this->altura = 0;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setAnoNasc($anoNasc)
    {
        $this->anoNasc = $anoNasc;
    }
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getAnoNasc()
    {
        return $this->anoNasc;
    }
    public function getPeso()
    {
        return $this->peso;
    }
    public function getAltura()
    {
        return $this->altura;
    }
    public function calcularIdade($anoNasc)
    {
        return (2024 - $anoNasc);
    }
    public function calcularImc($peso, $altura)
    {
        $imc = $peso / Pow($altura, 2);
    }
    public function imprimirResultado()
    {
        echo "Ficha técnica de $this->nome";
        echo "Altura: $this->altura m";
        echo "Peso: $this->peso kg";
        echo "Idade: $this->calcularIdade($this->anoNasc)";
        echo "Imc:$this->calcularImc($this->peso, $this->altura)";
    }
}
