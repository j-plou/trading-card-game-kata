<?php

namespace Tcg\Tests;

use Tcg\Player as Player;
use PHPUnit\Framework\TestCase;

class PlayerTest extends TestCase
{
    public function testHasInnitialValues()
    {
        $player = new Player();

        $this->assertEquals($player->getHealth(), 30);
        $this->assertEquals($player->getMana(), 0);
        $this->assertClassHasAttribute('deck', Player::class);
    }
}
