<?php 

class Box {
    
    private $engins;
    private $id;

    public function __construct($id) {
        $this->id = $id;
    }

    public function toString() {
        return "Box n°". $this->id;
    }
}