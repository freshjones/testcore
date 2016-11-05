<?php

namespace Core\Helpers;

class Container
{
    
    private $registry;

    public function __construct()
    {
    }

    public function set($key, $obj)
    {
        $this->registry[$key] = $obj;
    }

    public function get($key)
    {
        return $this->registry[$key];
    }

    public function all()
    {
        return $this->registry;
    }

}