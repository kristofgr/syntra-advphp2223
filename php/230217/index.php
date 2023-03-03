<?php

require "includes/Db.class.php";
require "includes/Track.class.php";

$db = new Db();
$track = new Track($db);

$page = 1;
$limit = 50;
$total = $track->getTotal();
$pages = ceil($total / $limit);


if (isset($_GET['page']) && (is_numeric($_GET['page'])) && ($_GET['page'] <= $pages) && ($_GET['page'] > 0)) {
  $page = (int)$_GET['page'];
}


$return = (object)[
  'page' => $page,
  'total' => $total,
  'pages' => $pages,
  // 'next_page_url' => 
  'results' => $track->getAll(($page - 1) * $limit, $limit)
];

if ($page < $pages) {
  $return->next_page_url= 'http://localhost/230217/index.php?page=' . $page + 1;
}
if ($page > 1) {
  $return->previous_page_url= 'http://localhost/230217/index.php?page=' . $page - 1;
}



// print "<pre>";
// var_dump($return);

header('Content-Type: application/json; charset=utf-8');
print json_encode($return);