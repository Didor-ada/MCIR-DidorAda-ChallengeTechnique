<?php

require 'Animaux.php';

require_once 'Chat.php';
require_once 'Dog.php';
require_once 'Poule.php';

/*
 * Ne pas toucher à ce qui suit...
 */

/*
 * Affichage du chat
 */
echo "<br>Le chat : ";

$cat = new Chat("Mâle");
$cat->Miaule();

echo " Nombre de pattes : " . $cat->getNbPattes();

/*
 * Affichage du chien
 */
echo "<br>Le chien : ";

$dog = new Dog("Femelle");
$dog->Aboie();

echo " Nombre de pattes : " . $dog->getNbPattes();

/*
 * Affichage de la poule
 */
echo "<br>La poule : ";

$poule = new Poule();
$poule->Caquette();

echo " Nombre de pattes : " . $poule->getNbPattes();
