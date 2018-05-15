<?php

namespace Tcg\Tests;

use Tcg\Player as Player;
use PHPUnit\Framework\TestCase;

class PlayerTest extends TestCase
{
    public function testHasInitialValues()
    {
        $player = new Player();

        $this->assertEquals(30, $player->getHealth());
        $this->assertEquals(0, $player->getMana());
        $this->assertClassHasAttribute('deck', Player::class);
        $this->assertEquals(3, sizeof($player->getInitialHand()));
    }
}
