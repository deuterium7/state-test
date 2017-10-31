<?php

namespace AlexanderZabornyi\StateTest;

class LowerCase implements WritingState
{
    /**
     * Написать в нижнем региистре
     *
     * @param string $words
     *
     * @return string
     */
    public function write(string $words): string
    {
        return strtolower($words);
    }
}