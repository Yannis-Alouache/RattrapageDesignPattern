<?php

include_once("Box.php");

class BoxManager {

    private static $instance;
    private $boxes;

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

    public function printAll() {
        foreach ($this->boxes as $box) {
            $box->printBox();
        }
    }

}