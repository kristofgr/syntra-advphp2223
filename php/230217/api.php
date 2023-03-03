<?php
require "includes/Db.class.php";
require "includes/Track.class.php";


parse_str($_SERVER["QUERY_STRING"], $args);
$args['qsparts'] = explode('/', $args['qs']);

switch ($args['qsparts'][1]) {
  case 'tracks':
    $db = new Db();
    $track = new Track($db);
    $page = 1;
    $limit = 50;
    $total = $track->getTotal()[0]->total;
    $pages = ceil($total / $limit);
    if (isset($args['page']) && (is_numeric($args['page'])) && ($args['page'] <= $pages) && ($args['page'] > 0)) {
      $page = (int)$args['page'];
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
    header('Content-Type: application/json; charset=utf-8');
    print json_encode($return);
    break;
  
  default:
    # code...
    break;
}



// print '<pre>';
// print_r($args);

// // parse_str( parse_url( $_SERVER["QUERY_STRING"], PHP_URL_QUERY), $array );
// // print_r( $array );


// exit;
