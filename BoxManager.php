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

    public function toString() {
        foreach ($this->boxes as $box) {
            print($box->toString() . "\n");
        }
    }

}