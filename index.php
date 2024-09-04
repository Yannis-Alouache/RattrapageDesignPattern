<?php

include_once("Factory.php");
include_once("BoxManager.php");

function main() {
    $boxManager = BoxManager::getInstance();

    $boxManager->createBox(1);
    $boxManager->createBox(2);
    $boxManager->createBox(3);

    $boxManager->addEngin(1, Factory::getEngin("Bulldozer"));
    $boxManager->addEngin(1, Factory::getEngin("Nacelle"));
    $boxManager->addEngin(1, Factory::getEngin("Pelleteuse"));
    $boxManager->addEngin(1, Factory::getEngin("Rouleau Compresseur"));
    $boxManager->addEngin(1, Factory::getEngin("Tractopelle"));
    $boxManager->addEngin(1, Factory::getEngin("Bulldozer"));
    $boxManager->addEngin(1, Factory::getEngin("Bulldozer"));
    $boxManager->addEngin(1, Factory::getEngin("Bulldozer"));

    $boxManager->addEngin(2, Factory::getEngin("Nacelle"));
    $boxManager->addEngin(2, Factory::getEngin("Tractopelle"));
    $boxManager->addEngin(2, Factory::getEngin("Bulldozer"));
    $boxManager->addEngin(2, Factory::getEngin("Bulldozer"));
    $boxManager->addEngin(2, Factory::getEngin("Pelleteuse"));
    $boxManager->addEngin(2, Factory::getEngin("Bulldozer"));
    $boxManager->addEngin(2, Factory::getEngin("Pelleteuse"));
    $boxManager->addEngin(2, Factory::getEngin("Bulldozer"));

    $boxManager->addEngin(3, Factory::getEngin("Bulldozer"));
    $boxManager->addEngin(3, Factory::getEngin("Nacelle"));
    $boxManager->addEngin(3, Factory::getEngin("Pelleteuse"));
    $boxManager->addEngin(3, Factory::getEngin("Rouleau Compresseur"));
    $boxManager->addEngin(3, Factory::getEngin("Tractopelle"));
    $boxManager->addEngin(3, Factory::getEngin("Nacelle"));
    $boxManager->addEngin(3, Factory::getEngin("Bulldozer"));
    $boxManager->addEngin(3, Factory::getEngin("Rouleau Compresseur"));

    $boxManager->printAll();

}

main();