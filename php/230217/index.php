<?php

require "includes/Db.class.php";
require "includes/Track.class.php";

$db = new Db();
$track = new Track($db);


// $tracks = Db::getTracks();
// $tracks = $db->getTracks();

$return = (object)[
  'page' => 1,
  'results' => $track->getAll()
];

// print "<pre>";
// var_dump($return);

header('Content-Type: application/json; charset=utf-8');
print json_encode($return);