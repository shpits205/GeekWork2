<?php
include 'autoloader.php';

$animal = new Birds();
$animal->setInfoAnimal("Птічка какаду",12,5);
$animal->showInfo();

$animal = new Birds();
$animal->setInfoAnimal("Птічка Бугага",2,1);
$animal->showInfo();

$animal = new Mammals();
$animal->setInfoAnimal("Коровка Муму",200,20);
$animal->showInfo();

$animal = new Mammals();
$animal->setInfoAnimal("Барашик Шон",200,20);
$animal->showInfo();