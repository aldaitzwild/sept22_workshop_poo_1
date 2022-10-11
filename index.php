<?php

// First Labour : Heracles vs Nemean Lion
// use your Figher class here

require_once 'src/Fighter.php';

$heracles = new Fighter("Heracles", 20, 6);
$lion = new Fighter("Lion de némée", 11, 13);


echo "Combattant 1 : " . $heracles->getName() . ' - ' . $heracles->getLife() . "\n";
echo "Combattant 2 : " . $lion->getName() . ' - ' . $lion->getLife() . "\n";

$round = 1;
while(true) {
    $heracles->fight($lion);
    if(!$lion->isAlive())
        break;

    $lion->fight($heracles);
    if(!$heracles->isAlive())
        break;

    echo "Round : $round\n";
    echo "Combattant 1 : " . $heracles->getName() . ' - ' . $heracles->getLife() . "\n";
    echo "Combattant 2 : " . $lion->getName() . ' - ' . $lion->getLife() . "\n";

    $round++;
}

echo "*******************************************\n";
echo "Combattant 1 : " . $heracles->getName() . ' - ' . $heracles->getLife() . "\n";
echo "Combattant 2 : " . $lion->getName() . ' - ' . $lion->getLife() . "\n";