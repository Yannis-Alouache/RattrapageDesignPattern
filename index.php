<?php

include_once("Factory.php");
include_once("BoxManager.php");

function main() {
    $boxManager = BoxManager::getInstance();

    $boxManager->createBox(1);

    $boxManager->toString();

}

main();