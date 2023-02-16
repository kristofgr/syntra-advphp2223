<?php

Class Bird extends Animal {

  public function fly() {
    print $this->name . " is flying";
  }

  public function setNoise(String $noise) {
    $this->noise = $noise;
  }

}