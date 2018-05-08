<?php

namespace Tcg;

class Deck
{
    const INITIAL_SIZE = 20;
    private $size;

    public function __construct()
    {
        $this->setSize(self::INITIAL_SIZE);
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getCardCollection()
    {

    }
}
