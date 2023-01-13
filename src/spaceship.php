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
    // Constructor
    public function __construct(
        $ammo = 100,
        $fuel = 100,
        $hitPoints = 100,
        $damage = 40,
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
    public function shoot($location1, $location2): int
    {
        $distance = sqrt(pow($location1[0] - $location2[0], 2) + pow($location1[1] - $location2[1], 2));
        
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
    public function move()
    {
        $fuelUsage = 2;
        if ($this->fuel - $fuelUsage > 0) {
            $this->fuel -= $fuelUsage;
        } else {
            $this->fuel = 0;
        }
    }

    public function healthScore($health)
    {
        $this->health = $this->health - $this->damage;
        if($this->health = 0) {    
            echo "Game over";
        }else {
        return $this->health;
        }
    }
}
