<?php
class Animal{

    public $nome;
    public $especie;
    public $idade;
    public $sexo;
    public $peso;
    public $cor;
    public $status;
    public $chipado;


    public function exibirFicha():string{
        return "ANIMAL <br>nome: {$this->nome} , <br> espécie: {$this->especie}, <br> idade: {$this->idade},<br> sexo: {$this->sexo},<br> peso: {$this->peso},<br> cor: {$this->cor},<br> status: {$this->status},<br> chipado: {$this->chipado}<br>";
    }
    public function atualizarPeso($peso):string{
        $this->peso= $peso;
        return "<br>peso:{$this->peso}";
    }
     public function verificarStatus($novostatus):string{
        $this->status= $novostatus;
        return "
        status:{$this->status} <br>";

    }
    public function verificarIdade():string{
        if ($this->idade<=7){
            return"filhote";
        } elseif ($this->idade> 8 && $this->idade<9){
            return"adulto";
        } else {
            return "idoso";
        }

    }
    public function marcarComoChipado():string{
        if ($this->chipado=="sim"){
            return "";
        }
        elseif($this->chipado=="nao" && "não"){
            return "";
        }
        else{
            return "preenchimento incorreto";
        }
    
    }
    public function resumoAnimal():string{
        return "resumo: {$this->nome}, {$this->especie} e {$this->status} <br>" ; //verdadeiro
    }
    public function verificarSexo():string{
        return "sexo: {$this->sexo} <br>";
    }
}