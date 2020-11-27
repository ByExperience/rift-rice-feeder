<?php

namespace RiceProvider\Providers;

#[Attribute]
abstract class AbstractProvider
{
    public array $arguments = [];

    public function __construct(...$arguments)
    {
        $this->arguments = $arguments;
    }

    protected function getName()
    {
        return static::class;
    }

    public function cook()
    {
        $args = implode(',', $this->arguments);

        echo "I'm good at {$args}! --{$this->getName()}\n";
    }
}