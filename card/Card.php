<?php
class Card
{
    public $ID;
    protected $number;
    protected $date;
    protected $cvv;

    public function __construct($ID, $number, $date, $cvv)
    {
        $this->ID = $ID;
        $this->number = $number;
        $this->date = $date;
        $this->cvv = $cvv;
    }

    public function getID()
    {
        return $this->ID;
    }
    public function setID($ID)
    {
        $this->ID = $ID;
    }

    public function getNumber()
    {
        return $this->number;
    }
    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function getDate()
    {
        return $this->date;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getCvv()
    {
        return $this->cvv;
    }
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;
    }

}
?>