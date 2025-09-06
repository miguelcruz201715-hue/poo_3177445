<?php

require_once 'carro.php';

//$scarro = new Carro();

$carro1 = new Carro("Amarillo","Ferrari","Gallardo",500,200,2);
$carro2 = new Carro("lila","lamborginni","Renault","Clio",100,90,5);
$carro3 = new Carro("Azul","Ford","Mustang",250,450,4);
$carro4 = new Carro("Verde","Porsche","911",320,600,2);

var_dump($carro1);
var_dump($carro2);
var_dump($carro3);
var_dump($carro4);
