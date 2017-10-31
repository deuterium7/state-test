<?php

namespace AlexanderZabornyi\StateTest;

class TextEditor
{
    protected $state;

    /**
     * TextEditor constructor.
     *
     * @param WritingState $state
     */
    public function __construct(WritingState $state)
    {
        $this->state = $state;
    }

    /**
     * Установить состояние
     *
     * @param WritingState $state
     */
    public function setState(WritingState $state)
    {
        $this->state = $state;
    }

    /**
     * Добавить текст в редактор
     *
     * @param string $words
     *
     * @return string
     */
    public function add(string $words)
    {
        return $this->state->write($words);
    }
}