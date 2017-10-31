<?php

namespace AlexanderZabornyi\StateTest;

class DefaultCase implements WritingState
{
    /**
     * Написать стандартным образом
     *
     * @param string $words
     *
     * @return string
     */
    public function write(string $words): string
    {
        return $words;
    }
}