<?php
require "Planet.class.php";

$mercurius = new Planet("Mercurius", 4880, 57910000);

$planets = [
  $mercurius,
  new Planet("Venus", 12104, 108208930),
  new Planet("Aarde", 12756	, 149597870),
  new Planet("Mars", 6794, 227936640),
  new Planet("Jupiter", 142984, 778412010),
  new Planet("Saturnus", 120536, 1426725400),
  new Planet("Uranus", 51118, 2870972200),
  new Planet("Neptunus", 49572, 4498252900),
];

foreach($planets as $planet) {
  echo "<li>{$planet->getName()} : {$planet->getOmtrek()}</li>";
}

print "<pre>";
var_dump($planets);