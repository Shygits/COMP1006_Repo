<?php
class Car{
//PROPERTIES
public string $make;
public string $model;
public int $year;

//CONSTRUCTOR function
public function__constructor(string $make, string $model, int $year) {

$this->make = $make;
$this->model = $model;
$this->year = $year;

}

public function getCar() : string {
    return "Make : {$this->make}  | Model: {$this->model} | Year : {$this->year}";


  }
}
