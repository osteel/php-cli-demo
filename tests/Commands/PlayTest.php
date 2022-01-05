<?php

namespace Osteel\PhpCliDemo\Tests\Commands;

use Osteel\PhpCliDemo\Commands\Play;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;

class PlayTest extends TestCase
{
    public function testItDisplaysTheRightOutput()
    {
        $command = new Play();

        $tester = new CommandTester($command);
        $tester->setInputs([10, 'yes', 10, 'no']);
        $tester->execute([]);

        $tester->assertCommandIsSuccessful();
    }
}
