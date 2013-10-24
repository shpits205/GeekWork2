<?php
include 'autoloader.php';

$animal = new Birds();
$animal->setInfoAnimal();
echo $animal->showInfo();