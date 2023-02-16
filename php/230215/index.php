<?php

spl_autoload_register(function ($class_name) {
  include 'includes/' . strtolower($class_name) . '.class.php';
});

$person = new Person();

print 'hello world';

print '<h2>GET</h2>';
var_dump($_GET);