<?php
include_once './animal.php';
class Gato extends Animal{
    public $nome;
    public $castrado;
    public $pelagem;
    public $independente;
    public $vacinado;
    public $curioso;
    public $adoraColo;
    public $usaCaixaAreia;

    public function exibirGato():string{
        return "<br> <br>GATO <br>nome: {$this->nome}<br> castrado: {$this->castrado} <br> pelagem: {$this->pelagem}<br> independente: {$this->independente}<br> vacinado: {$this->vacinado}<br> curioso: {$this->curioso}<br> adora colo: {$this->adoraColo}<br> usa a caixa de areia: {$this->usaCaixaAreia}<br>";
    }
    public function castrar():string{
        if ($this->castrado=="sim"){
            return "castrado: sim";
        }
        elseif($this->castrado=="nao" && "não"){
            return "castrado: nao foi castrado";
        }
        else{
            return "preenchimento incorreto";
        }
    }
    public function verificarPelagem():string{
        return "<br>pelagem: {$this->pelagem}<br>";
    }
    public function atualizarIndependencia($grau):string{
        $this->independente= $grau;
        return "independente: {$this->independente} <br>";
    }
    public function vacinar():string{
        if ($this->vacinado=="sim"){
            return "vacinado: sim";
        }
        elseif($this->vacinado=="nao" && "não"){
            return "vacinado: nao foi castrado";
        }
        else{
            return "preenchimento incorreto";
        }
    }
    public function resumoGato():string{
        return "<br> <br>resumo <br>nome: {$this->nome}<br> pelagem: {$this->pelagem}<br>";
    }
    public function ensinarCaixaAreia():string{
        if ($this->usaCaixaAreia=="sim"){
            return "usa caixa: sim";
        }
        elseif($this->usaCaixaAreia=="nao" && "não"){
            return "usa caixa: nao";
        }
        else{
            return "preenchimento incorreto";
        }
    }
    public function verificarContato():string{
        if ($this->adoraColo=='sim'){
            return "<br> adora colo";
        }
        elseif($this->adoraColo=="nao" && "não"){
            return "<br>nao gosta de colo";
        }
        else{
            return "preenchimento incorreto";
        }
    }

}