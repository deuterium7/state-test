<?php

namespace AlexanderZabornyi\StateTest;

class UpperCase implements WritingState
{
    /**
     * Написать в верхнем регистре
     *
     * @param string $words
     *
     * @return string
     */
    public function write(string $words): string
    {
        return strtoupper($words);
    }
}