<?php
    echo Date('H:i:s');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Hello there</title>
    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
    </style>
</head>

<body>
    <?php
    $connection = new PDO('mysql:host=db;dbname=syntrafs;charset=utf8', 'username', 'password');
    $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'syntrafs'");
    $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

    if (empty($tables)) {
        echo '<p class="center">There are no tables in database <code>syntrafs</code>.</p>';
    } else {
        echo '<p class="center">Database <code>syntrafs</code> contains the following tables:</p>';
        echo '<ul class="center">';
        foreach ($tables as $table) {
            echo "<li>{$table}</li>";
        }
        echo '</ul>';
    }
    ?>
</body>

</html>