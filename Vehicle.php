<?php
class Vehicle {
    private $make;
    private $model;
    private $year;
    private $color;
    private $engine;

    public function setMake($make) {
        $this->make = $make;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function setEngine($engine) {
        $this->engine = $engine;
    }

    public function getMake() {
        return $this->make;
    }

    public function getModel() {
        return $this->model;
    }

    public function getYear() {
        return $this->year;
    }

    public function getColor() {
        return $this->color;
    }

    public function getEngine() {
        return $this->engine;
    }
}
?>