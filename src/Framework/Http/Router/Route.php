<?php

namespace Framework\Http\Router;

class Route
{
    private $name;
    private $pattern;
    private $handler;
    private $tokens;
    private $methods;

    public function __construct($name,$pattern,$handler,array $methods,array $tokens = [])
    {
        $this->name = $name;
        $this->pattern = $pattern;
        $this->handler = $handler;
        $this->methods = $methods;
        $this->tokens = $tokens;
    }

}