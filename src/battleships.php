<!-- <?php
require_once('./spaceship.php');

class battleship1 extends Spaceship
{
    private int $_lasergun;

    public function getLasergun($int)
    {
        return $this->_lasergun = $int;
    }
 
    public function __construct
    (   
       $lasergun = 30
    )
    {
        $this->lasergun = $lasergun;
    }


    public function hit($damage)
    {
        return $this->lasergun*$damage;

    }
} 

class battleship2 extends Spaceship
{
    private int $_flamethrower;

    public function getFlamethrower($int)
    {
        return $this->_flamethrower = $int;
    }
 
    public function __construct
    (   
       $flamethrower = 30,
    )
    {
        $this->flamethrower = $flamethrower;
    }


    public function hit($damage)
    {
        return $this->flamethrower*$damage;
    }
} 

class Battle {
    public function fight($battleship1, $battleship2)
    {
        $damage1 = $battleship1->$_damage;
        $damage2 = $battleship2->$_damage;
        $ship1->health -= $damage2;
        $ship2->health -= $damage1;

        
    }
}
?>

