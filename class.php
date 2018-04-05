<?php
require 'data.php';
//namespace Hackathon;

class heroes
{
    const HEALTH_BASE = 100;
    public $health;
    public $attack;
    public $dodge;
    public $id;
    public $dodged;

    public $name;
    public $intelligence;
    public $strength;
    public $speed;
    public $durability;
    public $power;
    public $combat;
    public $image;

    public function __construct($heroCase)
    {
        $this->health = self::HEALTH_BASE + $this->durability + $this->combat;
        $this->name = $heroCase['name'];
        $this->intelligence = $heroCase['powerstats']['intelligence'];
        $this->strength = $heroCase['powerstats']['strength'];
        $this->speed = $heroCase['powerstats']['speed'];
        $this->durability = $heroCase['powerstats']['durability'];
        $this->power = $heroCase['powerstats']['power'];
        $this->combat = $heroCase['powerstats']['combat'];
        $this->health = self::HEALTH_BASE + $this->durability + $this->combat;
        $this->attack = ($this->strength + $this->intelligence + $this->power)/2;
        $this->dodge = $this->speed/2;
        $this->image = $heroCase['images']['lg'];
    }

    public function dodge($target){
        $roll = rand(1, 100);
        var_dump($roll);
        if ($roll > $target->dodge){
            $dodge = 0;
        }elseif ($roll < $target->dodge){
            $dodge = 1;
        }return $dodge;
    }
    public function attack($target, $attacker){
        $target->health = $target->health - $attacker->attack;
        return $target->health;
}

    public function getStats(){
        $img = '<img src= "'.$this->image.'"  />' . "<br>";
        return $img . "<br>".
        $this->name. ' Health->' . $this->health. '  Attack->'
        . $this->attack. '  Dodge->'. $this->dodge .' '. $this->id .' '. "<br>".
        'Int->' . $this->intelligence. '  Strength->' . $this->strength. '  Speed->' . $this->speed.  "<br>    ".
        '  Pow->' . $this->power. '  Dur->' . $this->durability. '  Cmb->'. $this->combat. " ";

    }
}