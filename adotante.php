<?php
class Adotante{
    public $nome;
    public $idade;
    public $telefone;
    public $email;
    public $endereco;
    public $temOutrosAnimais;
    public $experienciaComPets;
    public $animalAdotado;

    public function exibirAdotante():string{
        return "<br> <br> ADOTANTE <br>nome: {$this->nome} , <br> idade: {$this->idade}, <br> telefone: {$this->telefone},<br> email: {$this->email},<br> endereco: {$this->endereco},<br>";
    }
    public function adotarAnimal():string{
        return "animal: {$this->animalAdotado}";
    }
    public function verificarIdade():string{
        if ($this->idade<=17){
            return"<br>voce ainda nao pode adotar";
        } elseif ($this->idade> 18 && $this->idade>18){
            return"<br>voce pode adotar";
        } else {
            return "<br>informacao incorreta";
        }
    }
    public function temExperiencia():string{
        return "<br> tem experiencia com pets: {$this->experienciaComPets}";
    }
    public function listarContato():string{
        return "<br><br>informações de contato <br> telefone: {$this->telefone} <br> email: {$this->email}";
    }
    public function verificarOutrosAnimais():string{
        return "<br> tem outros pets: {$this->temOutrosAnimais}";
    }
    public function resumoAdotante():string{
        return "<br> <br> resumo adotante <br>nome: {$this->nome}<br> pet: {$this->animalAdotado}<br>";
    }
    public function cancelarAdocao():string{  
        return "<br> adoção cancelada";
    }
}