<?php
require('functions.php');

$characters = getAPI("https://api.disneyapi.dev/characters");

// print '<pre>';
// var_dump($characters);
// exit;

?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cocktails...</title>
  <link href="//cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <div class="container text-center">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">

      <?php foreach ($characters->data as $character) { ?>

        <div class="col mb-5">
          <div class="card">
          <a href="character/<?= $character->_id ?>">
                    <img class="gui-card__img" src="<?= $character->imageUrl ?>" alt="" style="width: 100%;" />
                  </a>
            <div class="card-body">
              <h5 class="card-title"><?= $character->name ?></h5>
              <a href="character/<?= $character->_id ?>">
                    info
              </a>
            </div>
          </div>
        </div>

      <?php } ?>





    </div>
  </div>
</body>

</html>