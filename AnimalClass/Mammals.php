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
    public function setInfoAnimal($name,$weigh,$age)
    {
        $this->setName($name);
        $this->setWeight($weigh);
        $this->setAge($age);
    }
    public function showInfo()
    {
        echo $this->getName()."\n";
        echo $this->getWeight()."кг.\n";
        echo $this->getAge()."р.\n";
    }
    public function milk()
    {
        echo "Ooooh yes!"."\n";
    }
}