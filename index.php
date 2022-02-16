<?php

/**
 * Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
 * Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
 * Provate a far interagire tra di loro gli oggetti: ad esempio, l’utente dello shop inserisce una carta di credito...
 * $c = new CreditCard(..);
 * $user->insertCreditCard($c);
 * Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta).
 */
require_once __DIR__ . '/card/Card.php';
require_once __DIR__ . '/product/Product.php';
require_once __DIR__ . '/user/User.php';
require_once __DIR__ . '/user/Manager.php';

try {
    $product = new Product('Iphone 13', 1400);
    var_dump($product->getName());
  
    $product->setUsers([
      new User('Mario', 'Rossi', 'MDFNDL00A21L987H'),
      new User('Luigi', 'Bianchi', 'LKJNFG02M34MLJDI'),
    ]);
    var_dump($product->getUsers());
  } catch (Exception $error) {
    echo $error->getMessage();
  }

?>