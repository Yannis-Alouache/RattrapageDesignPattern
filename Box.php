<?php 

class Box {
    
    private $engins;
    private $id;

    public function __construct($id) {
        $this->id = $id;
        $this->engins = array();
    }

    public function isBoxFull() {
        return count($this->engins) >= 8;
    }

    public function addEngin($engin) {
        if (!$this->isBoxFull()) {
            $this->engins[] = $engin;
        }
        else {
            throw new Exception("La box n°" . $this->id . " est pleine !");
        }
    }

    public function printBox() {
        print("- Box n°" . $this->id . "\n");
        if (count($this->engins) > 0) {
            foreach ($this->engins as $engin) {
                print("  - " . $engin->type . "\n");
            }
        }
        else {
            print("  - Vide\n");
        }
    }

    public function getId() {
        return $this->id;
    }
}