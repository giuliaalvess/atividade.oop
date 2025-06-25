<?php
class Cachorro{

    public $nome;
    public $raca;
    public $porte;
    public $nivelEnergia;
    public $vacinado;
    public $vermifugado;
    public $sociavel;
    public $adestrado;

    public function exibirCachorro():string{
        return "<br> CACHORRO <br> nome: {$this->nome} <br> raca: {$this->raca} <br> porte: {$this->porte}<br> nivel de energia: {$this->nivelEnergia}<br> vacinado: {$this->vacinado}<br> vermifugado: {$this->vermifugado}<br> sociavel: {$this->sociavel}<br> adestrado: {$this->adestrado}<br>";
    }

    public function vacinar():string{
        if ($this->vacinado== 'sim'){
            return" <br> verdade, foi vacinado";
        } elseif ($this->vacinado== 'nao'){
            return"ainda não foi vacinado";
        } else {
            return "informação incorreta";
        }

    }

    public function verificarAdestramento():string{
        return " <br> adestrado: {$this->adestrado} <br>";
    }

    public function atualizarNivelEnergia($valor):string{
        $this->nivelEnergia= $valor;
        return "nivel de energia: {$this->nivelEnergia} <br>";
    }
    public function indicarPorte():string{
        return "O cachorro tem porte: {$this->porte} <br>";
    }
    public function socializar():string{
         if ($this->sociavel== 'sim'){
            return"que bom! seu cachorro é sociavel";
        } elseif ($this->sociavel== 'nao'){
            return"eita, melhor tomar cuidado na presença de outros animais";
        } else {
            return "informação incorreta";
        }
    }
    public function iniciarAdestramento():string{
         if ($this->adestrado== 'sim'){
            return" <br> que bom! o cachorro é adestrado";
        } elseif ($this->adestrado== 'nao'){
            return"<br> voce ainda precisa adestrar seu cachoror";
        } else {
            return " <br> informação incorreta";
        }
    }
    public function resumoCachorro():string{
        return "<br> nome: {$this->nome} <br> raca: {$this->raca} <br> porte: {$this->porte}<br> ";
    }
}

