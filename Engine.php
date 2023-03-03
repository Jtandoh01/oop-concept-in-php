<?php
class Engine {
    private $type;
    private $displacement;
    private $horsepower;

    public function setType($type) {
        $this->type = $type;
    }

    public function setDisplacement($displacement) {
        $this->displacement = $displacement;
    }

    public function setHorsepower($horsepower) {
        $this->horsepower = $horsepower;
    }

    public function getType() {
        return $this->type;
    }

    public function getDisplacement() {
        return $this->displacement;
    }

    public function getHorsepower() {
        return $this->horsepower;
    }
}
?>