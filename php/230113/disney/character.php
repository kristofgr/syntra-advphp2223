<?php
require('functions.php');

if (strpos($_SERVER["REQUEST_URI"], "character.php?id=") > 0) {
  header("location: " . str_replace(".php?id=", "/", $_SERVER["REQUEST_URI"]), true, 301);
  exit;
}

$id = 10;
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}

$character = getAPI("https://api.disneyapi.dev/characters/" . $id);

?>

<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Disney</title>

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <script src="js/index.js"></script>

</head>

<body>

  <div class="container">

    <div class="card bg-dark text-white">
      <img src="<?= $character->imageUrl ?>" class="card-img-top" alt="<?= $character->name ?>">
      <div class="card-body">
        <h5 class="card-title"><?= $character->name ?></h5>
      </div>
      <ul class="list-group list-group-flush bg-dark">
        
        <li class="list-group-item bg-dark"><strong>Films</strong></li>
        <?php foreach($character->films as $film){ ?>
          <li class="list-group-item bg-dark"><?= $film ?></li>
        <?php } ?>

        <li class="list-group-item bg-dark"><strong>TV Shows</strong></li>
        <?php foreach($character->tvShows as $show){ ?>
          <li class="list-group-item bg-dark"><?= $show ?></li>
        <?php } ?>

        <li class="list-group-item bg-dark"><strong>videoGames</strong></li>
        <?php foreach($character->videoGames as $game){ ?>
          <li class="list-group-item bg-dark"><?= $game ?></li>
        <?php } ?>
      </ul>
    </div>


  </div>

</body>

</html>