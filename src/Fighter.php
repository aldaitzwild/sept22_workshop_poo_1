<?php

/* Fighter class definition */

class Fighter 
{
    public const MAX_LIFE = 100;

    private string $name;
    private int $strength;
    private int $dexterity;
    private int $life = self::MAX_LIFE;

    public function __construct(string $name, int $strength, int $dexterity)
    {
        $this->name = $name;
        $this->strength = $strength;
        $this->dexterity = $dexterity;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getLife() : int
    {
        return $this->life;
    }

    public function takeDamage(int $damage) : void
    {
        if($damage > $this->life) {
            $this->life = 0;
        } else {
            $this->life -= $damage;
        }
    }

    public function isAlive() : bool
    {
        if($this->life == 0)
            return false;
            
        return true;
    }

    public function getDexterity() : int
    {
        return $this->dexterity;
    }

    public function fight(Fighter $opponent) : void
    {
        $attack = rand(1, $this->strength);
        $defense = $opponent->getDexterity();

        $damage = $attack - $defense;
        $damage = $damage > 0 ? $damage : 0;

        $opponent->takeDamage($damage);

    }
}