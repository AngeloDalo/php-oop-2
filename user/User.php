<?php

class User 
{
    protected $name;
    protected $lastName;
    protected $CF;

    public function __construct($name, $lastName, $CF)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->CF = $CF;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getLastName()
    {
        return $this->lastName;
    }
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getCF()
    {
        return $this->CF;
    }
    public function setCF($CF)
    {
        $this->CF = $CF;
    }

}

?>