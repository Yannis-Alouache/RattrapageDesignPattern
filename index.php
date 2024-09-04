<?php

include_once("Factory.php");

function main() {
    $nacelle = Factory::getEngin("Nacelle");
    print($nacelle->type);
}

main();