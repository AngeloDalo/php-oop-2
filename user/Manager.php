<?php
class Manager extends User
{
    protected $level;
    protected $salary;

    public function __construct($ID, $name, $lastName, $level, $CF)
    {
        $this->ID = $ID;
        $this->name = $name;
        $this->lastName = $lastName;
        $this->level = $level;
        $this->CF = $CF;
    }

    public function getLevel()
    {
      return $this->level;
    }
    public function setLevel($level)
    {
      $this->level = $level;
      return $this;
    }

    public function getSalary()
    {
      return $this->salary;
    }
    public function setSalary($salary)
    {
      $this->salary = $salary;
      return $this;
    }
}

?>