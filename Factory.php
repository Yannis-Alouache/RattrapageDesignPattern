<?php

include_once("engins/Bulldozer.php");
include_once("engins/Nacelle.php");
include_once("engins/Pelleteuse.php");
include_once("engins/RouleauCompresseur.php");
include_once("engins/Tractopelle.php");

class Factory {
    public static function getEngin($type) {
        switch ($type) {
            case "Bulldozer":
                return new Bulldozer();
            case "Nacelle":
                return new Nacelle();
            case "Pelleteuse":
                return new Pelleteuse();
            case "Rouleau Compresseur":
                return new RouleauCompresseur();
            case "Tractopelle":
                return new Tractopelle();
            default:
                throw new Exception($type . " n'est pas un type d'engin valide !");
        }
    }
}