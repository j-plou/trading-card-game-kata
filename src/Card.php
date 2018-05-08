<?php

namespace Tcg;

class Card
{
    private $manaCost;

    public function getManaCost()
    {
        return $this->manaCost;
    }

    public function setManaCost($manaCost)
    {
        $this->manaCost = $manaCost;
    }
}
