<?php

require_once '../vendor/autoload.php';

use App\Hello;

$hello = new Hello();
echo $hello->talk();

// utiliser la commande "composer dump-autoload" , si on fait une modification dans le composer.json pour les prendre en compte.