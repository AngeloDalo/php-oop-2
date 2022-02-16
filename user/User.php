<?php

class User 
{
    public $ID;
    public $name;
    public $lastName;
    public $CF;

    public function __construct($ID, $name, $lastName, $CF)
    {
        $this->ID = $ID;
        $this->name = $name;
        $this->lastName = $lastName;
        $this->CF = $CF;
    }

    public function getID()
    {
        return $this->ID;
    }
    public function setID($ID)
    {
        $this->ID = $ID;
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