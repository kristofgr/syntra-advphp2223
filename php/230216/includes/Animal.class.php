<?php

Class Animal {

  protected $name;
  protected $noise;

  public function __construct(String $name) {
    $this->name = $name;
  }

  public function setName(String $name) {
    $this->name = $name;
  }

  public function getName() {
    return $this->name;
  }

  public function setNoise(String $noise) {
    $this->noise = $noise;
  }

  public function getNoise() {
    return $this->noise;
  }

  public function makeNoise() {
    print $this->noise;
  }

}