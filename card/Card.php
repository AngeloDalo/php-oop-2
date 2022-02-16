<?php
class Card
{
    protected $number;
    protected $date;
    protected $cvv;

    public function __construct($number, $date, $cvv)
    {
        $this->number = $number;
        $this->date = $date;
        $this->cvv = $cvv;
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