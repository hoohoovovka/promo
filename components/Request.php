<?php

namespace components;

//Dummy request class
class Request
{
    private $data = [];

    public function __construct($params)
    {
        $this->data = $params;
    }

    public function has($key)
    {
        return isset($this->data[$key]);
    }

    public function get($key, $default=null)
    {
        return $this->has($key) ? $this->data[$key] : $default;
    }

}