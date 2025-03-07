<?php

namespace app\core;

class Request
{

    public function getMethod():string
    {
        $method = strtolower($_SERVER["REQUEST_METHOD"]);

        return $method;
    }

    public function getPath():string
    {
        $path = $_SERVER["PATH_INFO"] ?? '/';
        
        return $path;

    }
}