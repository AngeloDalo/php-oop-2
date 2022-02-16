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
    $product2 = new Product('S8', 1300);
  
    $product->setUsers([
        new User('1', 'Mario', 'Rossi', 'MDFNDL00A21L987H'),
    ]);
    $product->setManagers([
        new Manager('2', 'Carlo', 'Binachi', '3', 'MBKLD34A23LD90I'),
    ]);
    $product->setCard([
        new Card('1', '5242345643', '10-12-2023', '454'),
        new Card('2', '3434545564', '12-02-2024', '453'),
    ]);
  } catch (Exception $error) {
    echo $error->getMessage();
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $product->name ?></h1>
    <span><?php echo $product-> price ?>&euro;</span>
    <?php foreach ($product->users as $user) {
        foreach ($user as $value) {
            echo $value . ' ';
        }
    }?>

    <h1><?php echo $product2->name ?></h1>
    <span><?php echo $product2-> price ?>&euro;</span>
    <?php foreach ($product->managers as $manager) {
        foreach ($manager as $value) {
            echo $value . ' ';
        }
    }?>
</body>
</html>