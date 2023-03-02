<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

require('functions.php');

$parCategory = "Beer";
if (isset($_GET['c'])) {
  $parCategory = $_GET['c'];
}

$categories = getAPI("https://www.thecocktaildb.com/api/json/v1/1/list.php?c=list");
$cocktails = getAPI('https://www.thecocktaildb.com/api/json/v1/1/filter.php?c=' . $parCategory);

usort($categories, function($a, $b) {
  return strcmp($a->strCategory, $b->strCategory);
});

usort($cocktails, function($a, $b) {
  return strcmp($a->strDrink, $b->strDrink);
});


// print '<pre>';
// var_dump($categories);
// var_dump($cocktails);
// exit;

?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cocktails...</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <div class="container text-center">

    <ul class="nav nav-pills mb-5">

      <?php foreach ($categories as $category) { ?>

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?c=<?= $category->strCategory ?>">
            <?= $category->strCategory ?>
          </a>
        </li>

      <?php } ?>

    </ul>



    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">

      <?php foreach ($cocktails as $cocktail) { ?>

        <div class="col mb-5">
          <div class="card">
            <img src="<?= $cocktail->strDrinkThumb ?>" class="card-img-top" alt="<?= $cocktail->strDrink ?>">
            <div class="card-body">
              <h5 class="card-title"><?= $cocktail->strDrink ?></h5>
              <a href="/detail.php?id=<?= $cocktail->idDrink ?>" class="btn btn-primary">Lees meer</a>
            </div>
          </div>
        </div>

      <?php } ?>





    </div>
  </div>
</body>

</html>