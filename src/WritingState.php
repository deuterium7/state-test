<?php

namespace AlexanderZabornyi\StateTest;

interface WritingState
{
    public function write(string $words): string;
}