<?php

include_once("Factory.php");
include_once("BoxManager.php");

function main() {
    $boxManager = BoxManager::getInstance();

    $boxManager->createBox(1);
    $boxManager->createBox(2);
    $boxManager->createBox(3);

    $boxManager->addEngin(1, Factory::getEngin("Bulldozer"));
    $boxManager->addEngin(1, Factory::getEngin("Bulldozer"));
    $boxManager->addEngin(1, Factory::getEngin("Bulldozer"));
    $boxManager->addEngin(1, Factory::getEngin("Bulldozer"));
    $boxManager->addEngin(1, Factory::getEngin("Bulldozer"));
    $boxManager->addEngin(1, Factory::getEngin("Bulldozer"));
    $boxManager->addEngin(1, Factory::getEngin("Bulldozer"));
    $boxManager->addEngin(1, Factory::getEngin("Bulldozer"));
    $boxManager->addEngin(1, Factory::getEngin("Bulldozer"));

    $boxManager->printAll();

}

main();