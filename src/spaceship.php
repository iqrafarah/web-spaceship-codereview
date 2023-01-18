<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Spaceship
{
    // Properties
    private bool $_isAlive;
    private int $_fuel;
    private int $_hitPoints;
    private int $_ammo;
    private int $_damage;
    private int $_health;

    // Constructor
    public function __construct(
        $ammo = 100,
        $fuel = 100,
        $hitPoints = 100,
        $damage = 2,
        $health = 100,
        $location = array(0,0)
    ) {
        $this->ammo = $ammo;
        $this->fuel = $fuel;
        $this->hitPoints = $hitPoints;
        $this->damage = $damage;
        $this->location = $location;
        $this->isAlive = true;
        $this->health = $health;
    }
  
    // Shoot
    public function shoot($distance): int
    {
        
        if($distance <= 50) {
            $shot = 5;
            $damage = 2;
        }else if($distance >= 100) {
            $shot = 10;
            $damage = 4;
        }
            
        if ($this->ammo - $shot >= 0) {
            $this->ammo -= $shot;
            $this->ammo =  $this->ammo - $shot;
            return ($shot * $damage);
        } else {
            return 0;
        }
    }

    // Hit
    public function hit($damage)
    {
        $this->hitPoints -= $damage;
        if($this->hitPoints <= 0)
        {
            $this->isAlive = false;
        }
    }
    // Move
    public function move($x, $y)
    {
        $distance = (sqrt(pow($this->location[0] - $x, 2) + pow($this->location[1] - $y, 2)));
        
        $fuelUsage = 2;
        if ($this->fuel - $fuelUsage > 0) {
            $this->fuel -= $fuelUsage;
        } else {
            $this->fuel = 0;
        }
        $location = array($x,$y);
        return $this->location = $location;
    }

    public function healthScore($health)
    {
        $this->health = 100;
    }
    

    public function getisAlive($bool) {
        return $this->_isAlive = $bool;
    }
    public function getfuel($int) {
        return $this->_fuel = $int;
    }
    public function gethitPoints($int) {
        return $this->_hitPoints = $int;
    }
    public function getammo($int) {
        return $this->_ammo = $int;
    }
    public function getdamage($int) {
        return $this->_damage = $int;
    }
    public function getHealth($int)
    {
        return $this->_health = $int;
    }
}

class Battleship1 extends Spaceship
{
    private int $_lasergun;
    
    public function getLasergun($int)
    {
        return $this->_lasergun = $int;
    }
 
    public function __construct()
    {  
       parent::__construct(); 
       $lasergun = 3;
       $this->lasergun = $lasergun;
       $this->location = array(43,5);
    }

    public function hits($damage)
    {   
        $this->health -= $this->lasergun*$damage = mt_rand(5, 15);
    }
} 
class Battleship2 extends Spaceship
{
    private int $_flamethrower;
    
    public function getFlamethrower($int)
    {
        return $this->_flamethrower = $int;
    }
 
    public function __construct()
    {  
       parent::__construct(); 
       $flamethrower = 5;
       $this->flamethrower = $flamethrower;
       $this->location = array(29,5);
    }

    public function hit($damage)
    {   
        $this->health -= $this->flamethrower*$damage = mt_rand(5, 15);
    }
} 
class Battle
{
    public function fight($battleship1, $battleship2)
    {
        $damage1 = $battleship1->damage;
        $damage2 = $battleship2->damage;
        $battleship1->hits($damage2); 
        $battleship2->hit($damage1); 

        if ($battleship1->health <= $battleship2->health) {
            echo "<h1 style='font-size: 100px; text-align: center; padding-top: 100px;'>Battleship2 won</h1>";
        } elseif ($battleship2->health <= $battleship1->health) {
            echo "<h1 style='font-size: 100px; text-align: center; padding-top: 100px;'>Battleship1 won</h1>";
        } else {
            echo "no one won";
        }
    }
}
