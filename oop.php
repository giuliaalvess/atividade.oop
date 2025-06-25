<?php

include_once './animal.php';

$animal = new Animal();
$animal->nome = 'Harry';
$animal->especie = 'gato';
$animal->idade = 4;
$animal->sexo = 'macho';
$animal->peso = 7;
$animal->cor = 'frajola';
$animal->status = 'adotado';
$animal->chipado = 'sim';


echo $animal->exibirFicha();
echo $animal->atualizarPeso(4) . "<br>";
echo $animal->verificarStatus("nao adotado");
echo $animal->verificarIdade()."<br>"; 
echo $animal->marcarComoChipado();
echo $animal->resumoAnimal();
echo $animal->verificarSexo();



include_once './cachorro.php';
$cachorro = new Cachorro();
$cachorro->nome = 'Caramelo';
$cachorro->raca= 'viralata';
$cachorro->porte= 'grande';
$cachorro->nivelEnergia= 2;
$cachorro->vacinado= 'sim';
$cachorro->vermifugado= 'sim';
$cachorro->sociavel= 'sim';
$cachorro->adestrado= 'sim';


echo $cachorro->exibirCachorro();
echo $cachorro->vacinar();
echo $cachorro->verificarAdestramento();
echo $cachorro->atualizarNivelEnergia(5)."<br>";
echo $cachorro->indicarPorte();
echo $cachorro->socializar();
echo $cachorro->iniciarAdestramento();
echo $cachorro->resumoCachorro();


include_once './gato.php';
$gato= new Gato();
$gato->nome = 'rony';
$gato->castrado = 'sim';
$gato->pelagem = 'laranja';
$gato->independente = 5;
$gato->vacinado = 'sim';
$gato->curioso = 'sim';
$gato->adoraColo = 'sim';
$gato->usaCaixaAreia = 'sim';

echo $gato->exibirGato();
echo $gato->castrar();
echo $gato->verificarPelagem();
echo $gato->atualizarIndependencia(10);
echo $gato->vacinar();
echo $gato->resumoGato();
echo $gato->ensinarCaixaAreia();
echo $gato->verificarContato();


include_once './adotante.php';
$adotante = new Adotante();
$adotante->nome = 'Alice';
$adotante->idade = 20;
$adotante->telefone= '51 51515151';
$adotante->email = 'alice@gmail.com';
$adotante->endereco = 'rua feliz';
$adotante->temOutrosAnimais = 'nao';
$adotante->experienciaComPets = 'nao';
$adotante->animalAdotado = 'gato';

echo $adotante->exibirAdotante();
echo $adotante->adotarAnimal();
echo $adotante->verificarIdade();
echo $adotante->temExperiencia();
echo $adotante->listarContato();
echo $adotante->verificarOutrosAnimais();
echo $adotante->resumoAdotante();
echo $adotante->cancelarAdocao();


?>