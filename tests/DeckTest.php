<?php

namespace Tcg\Tests;

use PHPUnit\Framework\TestCase;
use Tcg\Deck;
use Tcg\Player;

class DeckTest extends TestCase
{
    public function testInitialValues()
    {
        $deck = new Deck();

        self::assertEquals(20, $deck->getSize());
    }

    public function testDeckInitialValues()
    {
        $deck = new Deck();
        $cardInitialManaCosts = [
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

        foreach ($deck->getCardCollection() as $card) {
            self::assertEquals(array_shift($cardInitialManaCosts), $card->getManaCost());
        }
    }

    public function testDeckRemainingCardsAfterInitialHand()
    {
        $player = new Player();
        $playerDeck = $player->getDeck();

        self::assertEquals(17, sizeof($playerDeck->getCardCollection()));
    }
}
