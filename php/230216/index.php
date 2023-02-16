<?php
spl_autoload_register(function ($class_name) {
  include $_SERVER['DOCUMENT_ROOT'] . $_SERVER['REQUEST_URI'] . 'includes/' . $class_name . '.class.php';
});

$vogelbekdier = new Animal("Jos");
$vogelbekdier->setNoise("brrrrr");

$merel = new Bird("Mirlo");
$merel->setNoise("tweet tweet");

print "<pre>";
print $vogelbekdier->getName();
print "<br />";
print $vogelbekdier->makeNoise();
print "<br />";
print_r($vogelbekdier);
print "<br />";


print "<pre>";
print $merel->getName();
print "<br />";
print $merel->makeNoise();
print "<br />";
print $merel->fly();
print "<br />";
print_r($merel);
print "<br />";

var_dump($_SERVER);