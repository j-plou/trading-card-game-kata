<?php

namespace Tcg;

class Player
{
    private $health;
    private $mana;
    private $deck;

    const INITIAL_HEALTH = 30;
    const INITIAL_MANA   = 0;

    public function __construct()
    {
        $this->health = self::INITIAL_HEALTH;
        $this->mana   = self::INITIAL_MANA;
    }

    public function getHealth(): int
    {
        return $this->health;
    }

    public function getMana(): int
    {
        return $this->mana;
    }

}