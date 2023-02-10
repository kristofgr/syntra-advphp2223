<?php

require("Person.class.php");

$a = new Person();
$b = new Person();

$c = new Person("Petra", "Denayer");
$c->setFirstName("Petraaaaaa");
$a->setFirstName("Marouan");
$a->setName("Ajtirah");
$a->setAge(27);

$b->setFirstName("Gaspar");
$b->setName("Sandana Sandoval");


print '<pre>';

print "<h2>A</h2>";
var_dump($a);

print "<h2>B</h2>";
var_dump($b);

print "<h2>C</h2>";
var_dump($c);


print $a->getInitials() . "<br>";

print $b->getInitials() . "<br>";



$pdo = new PDO('mysql:host=db;dbname=syntrafs;charset=utf8', 'username', 'password');

