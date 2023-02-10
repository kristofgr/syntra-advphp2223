<?php

Class Person {

  private $firstName = "";
  private $name = "";
  private $age = 0;
  private $sex = "";

  public function __construct(String $one = "", String $two = "") {
    $this->firstName = $one;
    $this->name = $two;
  }

  
  public function setFirstName(String $n) {
    $this->firstName = $n;
  }

  public function getFirstName() {
    return $this->firstName;
  }
  
  public function setName($n) {
    $this->name = $n;
  }

  public function getName() {
    return $this->name;
  }
  
  public function setAge(int $i) {
    $this->age = $i;
  }

  public function getAge() {
    return $this->age;
  }

  public function getInitials() {
    $words = explode(" ", $this->firstName . " " . $this->name);
    $acronym = "";
    foreach ($words as $w) {
      $acronym .= substr($w, 0, 1);
    }
    return $acronym;
  }

}


