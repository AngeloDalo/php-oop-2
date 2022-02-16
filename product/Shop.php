<?php
require_once __DIR__ . '/card/Card.php';
require_once __DIR__ . '/user/User.php';
require_once __DIR__ . '/user/Manager.php';

class Shop 
{
    protected $name_product; //nome prodotto
    protected $price; //prezzo 
    protected $user = []; //utente
    protected $card = []; //carta di credito
}

?>