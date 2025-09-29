<?php
// index.php
class Pessoa {
    public $nome;
    public $idade;

    public function saudacao() {
        return "Olá, meu nome é " . $this->nome . " e tenho " . $this->idade . " anos.";
    }
}

$pessoa = new Pessoa();
$pessoa->nome = "João";
$pessoa->idade = 30;
echo $pessoa->saudacao();
// index.php
?>
