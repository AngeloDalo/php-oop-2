<?php
class Manager extends User
{
    protected $level;
    protected $salary;

    public function __construct($name, $lastName, $level)
    {
      parent::__construct($name, $lastName);
      $this->level = $level;
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