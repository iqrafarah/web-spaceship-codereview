<?php
include_once './spaceship.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>

<body>
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $ship = new spaceship();
    $battleship1 = new spaceship();
    $battleship2 = new spaceship();
    
    echo "<br>". $ship->ammo. "<br>";  


    $ship = new spaceship (50, 50, 50);
    $ship = new spaceship (50, 50, 50);
    echo $ship->ammo. "<br>";
    $dmg = $ship->shoot($ship->location,$ship->location);
    $battleship1->hit($dmg);
    $ship->healthScore(isset($health));

    echo "<br> ship1 Your stats are: <br> health: " .$battleship1->health. "<br>";
    echo "Ship ammo: " .$battleship1->ammo = mt_rand(10, 100). "<br>";
    echo "Ship fuel: " .$ship->fuel . "<br>";
    echo "Ship HP: " .$ship->hitPoints = mt_rand(40, 120). "<br>";
    echo "Location: " .$ship->location[0]. ' ' .$ship->location[1]. "<br>";


    echo "<br>ship2 Your stats are: <br> health: " .$battleship2->health .  "<br>";
    echo "Ship ammo: " .$battleship2->ammo = mt_rand(10, 100). "<br>";
    echo "Ship fuel: " .$battleship2->fuel . "<br>";
    echo "Ship HP: " .$battleship2->hitPoints = mt_rand(40, 120). "<br>";
            
    echo "The end of the code has been reached.<br>";
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
<canvas id="myChart" width="400" height="400"></canvas>
<script src="charts.js"></script>

</body>
</html>