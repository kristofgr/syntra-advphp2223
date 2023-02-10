<?php

Class Planet {

  private $name;
  private $diameter;
  private $distanceFromSun;

  public function __construct(String $name, int $diameter, int $distanceFromSun) {
    $this->name = $name;
    $this->diameter = $diameter;
    $this->distanceFromSun = $distanceFromSun;
  }

  public function getName() {
    return $this->name;
  }

  public function getDiameter() {
    return $this->diameter;
  }

  public function getDistanceFromSun() {
    return $this->distanceFromSun;
  }

  public function getOmtrek() {
    return pi() * $this->getDiameter();
  }

  public function renderNameMass()
  {
      $circle = $this->diameter * pi();
      echo "$this->name : $circle km <br>";
  }
}
