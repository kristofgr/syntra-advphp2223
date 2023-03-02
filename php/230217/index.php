<?php

require "includes/Db.class.php";

$db = new Db();

// $tracks = Db::getTracks();
$tracks = $db->getTracks();

print "<pre>";
print_r($tracks);