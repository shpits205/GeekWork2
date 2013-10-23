<?php
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

class Ptiz extends Animal
{
    public function test()
    {
        $this->setName("ShpitS");
        $this->setWeight(222);
    }
}