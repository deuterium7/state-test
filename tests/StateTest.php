<?php

namespace AlexanderZabornyi\StateTest\Tests;

use AlexanderZabornyi\StateTest\DefaultCase;
use AlexanderZabornyi\StateTest\LowerCase;
use AlexanderZabornyi\StateTest\TextEditor;
use AlexanderZabornyi\StateTest\UpperCase;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    public function testEditor()
    {
        $editor = new TextEditor(new DefaultCase());
        $this->assertEquals('Some default words', $editor->add('Some default words'));

        $editor->setState(new UpperCase());
        $this->assertEquals('SOME UPPER WORDS', $editor->add('Some upper words'));

        $editor->setState(new LowerCase());
        $this->assertEquals('some lower words', $editor->add('Some lower words'));
    }
}