<?php
require_once __DIR__ . '/../user/User.php';
class Product 
{
    public $name; //nome prodotto
    public $price; //prezzo 
    public $users = []; //utente
    public $managers = []; //managers
    public $card = []; //carta di credito

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

    public function getManagers()
    {
      return $this->managers;
    }
    public function setManagers(array $managers)
    {
      foreach ($managers as $manager) {
        if (!is_object($manager)) {
          throw new Exception('Non mi hai passato un oggetto');
        }
        $this->managers[] = $manager;
      }
      return $this;
    }

    public function getCard()
    {
      return $this->card;
    }
    public function setCard(array $card)
    {
      foreach ($card as $cardData) {
        if (!is_object($cardData)) {
          throw new Exception('Non mi hai passato un oggetto');
        }
        $this->card[] = $cardData;
      }
      return $this;
    }
}

?>