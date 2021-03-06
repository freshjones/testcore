<?php

namespace FreshJones\Core\Helpers;

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
        return is_array($this->registry) && !empty($this->registry) ? $this->registry : false;
    }

}