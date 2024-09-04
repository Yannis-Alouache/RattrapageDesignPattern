<?php

include_once("Box.php");

class BoxManager {

    private static $instance;
    private $boxes;

    private function __construct() {}

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new BoxManager();
        }
        return self::$instance;
    }

    public function createBox($id) {
        $this->boxes[] = new Box($id);
    }

    public function addEngin($boxId, $engin) {
        foreach ($this->boxes as $box) {
            if ($box->getId() == $boxId) {
                $box->addEngin($engin);
            }
        }
    }

    function verifyBoxesContainEachType() {
        $neededTypes = ["Pelleteuse", "Tractopelle", "Nacelle", "Bulldozer", "Rouleau Compresseur"];


        foreach ($this->boxes as $box) {
            $typePresent = [];
            foreach ($box->getEngins() as $engin) {
                $typePresent[] = $engin->type;
            }

            foreach ($neededTypes as $neededType) {
                if (!in_array($neededType, $typePresent)) {
                    print("La Box n°". $box->getId() . " n'as pas tous les types d'engins ! \n");
                    break;
                }
            }
        }
    }

    public function printAll() {
        foreach ($this->boxes as $box) {
            $box->printBox();
        }

        $this->verifyBoxesContainEachType();
    }

}