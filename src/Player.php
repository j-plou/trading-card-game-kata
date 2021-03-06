<?php

namespace Tcg;

class Player
{
    private $health;
    private $mana;
    private $deck;
    private $hand = [];

    const INITIAL_HEALTH    = 30;
    const INITIAL_MANA      = 0;
    const INITIAL_HAND_SIZE = 3;

    public function __construct()
    {
        $this->health = self::INITIAL_HEALTH;
        $this->mana   = self::INITIAL_MANA;
        $this->deck   = new Deck();
        $this->recieveInitialHand();
    }

    public function getHealth(): int
    {
        return $this->health;
    }

    public function getMana(): int
    {
        return $this->mana;
    }

    private function recieveInitialHand()
    {
        for ($cardCounter = 0; $cardCounter < self::INITIAL_HAND_SIZE; $cardCounter++) {
            $this->hand[] = $this->deck->extractCardFromDeck();
        }
    }

    public function getInitialHand()
    {
        return $this->hand;
    }

    public function getDeck(): Deck
    {
        return $this->deck;
    }
}