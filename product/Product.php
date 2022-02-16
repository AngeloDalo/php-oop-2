<?php
require_once __DIR__ . '/../user/User.php';
class Product 
{
    protected $name; //nome prodotto
    protected $price; //prezzo 
    protected $users = []; //utente
    protected $card = []; //carta di credito

    public function __construct($name, $price)
    {
      $this->name = $name;
      $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getUsers()
    {
      return $this->users;
    }
    public function setUsers(array $users)
    {
      foreach ($users as $user) {
        if (!is_object($user)) {
          throw new Exception('Non mi hai passato un oggetto');
        }
        $this->users[] = $user;
      }
      return $this;
    }
}

?>