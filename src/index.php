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
    <title>spaceship</title>
</head>

<body>
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $ship = new spaceship();
    $battleship1 = new battleship1();
    $battleship2 = new battleship2();
    $battle = new battle;

    $battle->fight($battleship1, $battleship2);

    $dmg = $ship->shoot($ship->location,$ship->location);
    $battleship1->hit($dmg);
    $ship->healthScore(isset($health));
    
    echo "<div class='battle'>";
    echo "<div class='battleship'>";
    echo "<br><h4>battleship1  Your stats are: </h4>  health: " .$battleship1->health. "<br>";
    echo "damege " .$battleship1->damage = mt_rand(1,40). "<br>";
    echo "ammo: " .$battleship1->ammo = mt_rand(10, 70). "<br>";
    echo "fuel: " .$battleship1->fuel . "<br>";
    echo "HP: " .$battleship1->hitPoints = mt_rand(40, 120). "<br>";
    echo "Location: " .$battleship1->location[0]. ' ' .$battleship1->location[1]. "<br>";
    echo "</div>";

    echo "<div class='battleship'>";
    echo "<br><h4>battleship2 Your stats are: </h4> health: " .$battleship2->health. "<br>";
    echo "damege " .$battleship2->damage = mt_rand(1, 40). "<br>";
    echo "ammo: " .$battleship2->ammo = mt_rand(10, 70). "<br>";
    echo "fuel: " .$battleship2->fuel . "<br>";
    echo "HP: " .$battleship2->hitPoints = mt_rand(40, 120). "<br>";
    echo "Location: " .$battleship2->location[0]. ' ' .$battleship2->location[1]. "<br>";
    echo "</div>";
    echo "</div>";

?>
<button type="button" onClick="refreshPage()">Battle</button>

<script>
function refreshPage(){
    window.location.reload();
} 
</script>
</body>
</html>