<?php

namespace Tcg\Tests;

use PHPUnit\Framework\TestCase;
use Tcg\Card;

class CardTest extends TestCase
{
    public function testManaCost()
    {
        $card         = New Card();
        $someCardMana = 4;
        $card->setManaCost($someCardMana);

        self::assertSame($card->getManaCost(), $someCardMana);
    }
}
