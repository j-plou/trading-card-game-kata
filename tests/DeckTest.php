<?php

namespace Tcg\Tests;

use PHPUnit\Framework\TestCase;
use Tcg\Deck;

class DeckTest extends TestCase
{
    public function testInitialValues()
    {
        $deck = new Deck();

        self::assertEquals($deck->getSize(), 20);
    }

    public function testCardInitialValues()
    {
        $deck = new Deck();
        $cardInitialValues = [0, 0, 1, 1, 2, 2, 2, 3, 3, 3, 3, 4, 4, 4, 5, 5, 6, 6, 7, 8];

        foreach ($deck->getCardCollection() as $card) {
            self::assertEquals($card->getManaCost(), array_pop($cardInitialValues));
        }
    }
}
