<?php
interface AnimalShowInfo
{
    public function showInfo();
}

abstract class Animal
{
    private $name;
    private $weight;
    private $age;
    abstract protected  function test();
    public   function setName($name)
    {
        $this->name = $name;
    }
    public  function setWeight($weight)
    {
        $this->weight = $weight;
    }
    public  function setAge($age)
    {
        $this->age = $age;
    }
    public   function getName()
    {
        return $this->name;
    }
    public  function getWeight()
    {
        return $this->weight;
    }
    public  function getAge()
    {
        return $this->age;
    }
}

abstract class AbstractMammals extends Animal
{
    abstract public function milk();
}
class Mammals extends AbstractMammals implements AnimalShowInfo
{
    public function test()
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

    }
}

class Artiodactyls extends Animal
{
    public function test()
    {
        $this->setName("ShpitS");
        $this->setWeight(222);
    }
}

class Birds extends Animal
{
    public function test()
    {
        $this->setName("ShpitS");
        $this->setWeight(222);
    }
}