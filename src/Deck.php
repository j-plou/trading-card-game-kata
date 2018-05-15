<?php

namespace Tcg;

class Deck
{
    const INITIAL_SIZE = 20;
    private static $cardInitialManaCosts = [
        0,
        0,
        1,
        1,
        2,
        2,
        2,
        3,
        3,
        3,
        3,
        4,
        4,
        4,
        5,
        5,
        6,
        6,
        7,
        8,
    ];
    private $size;
    private $cardCollection = [];

    public function __construct()
    {
        $this->setSize(self::INITIAL_SIZE);
        $this->innitCardCollection();
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function innitCardCollection()
    {
        foreach (self::$cardInitialManaCosts as $manaCost) {
            $card = new Card();
            $card->setManaCost($manaCost);
            $this->cardCollection[] = $card;
        }
    }

    public function getCardCollection()
    {
        return $this->cardCollection;
    }

    public function extractCardFromDeck()
    {

    }
}
