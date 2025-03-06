<?php

namespace app\core;

class Router
{
    public  $routes = [];


    public function get(string $url,$controller)
    {
        $this->routes['get'][$url]= $controller;

        // var_dump($this->routes);
        
    }

    public function post(string $url,$controller)
    {
        $this->routes['post'][$url]= $controller;
    }


}