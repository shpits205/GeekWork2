<?php
/**
 * Created by JetBrains PhpStorm.
 * User: shpits
 * Date: 24.10.13
 * Time: 14:27
 * To change this template use File | Settings | File Templates.
 */

class Mammals extends AbstractMammals implements AnimalShowInfo
{
    public function setInfoAnimal()
    {
        $this->setName("ShpitS");
        $this->setWeight(222);
    }
    public function showInfo()
    {
        echo $this->getName();
        echo $this->getWeight();
    }
    public function milk()
    {
        echo "Ooooh yes!";
    }
}