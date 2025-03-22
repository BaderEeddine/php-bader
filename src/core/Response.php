<?php

namespace app\core;

class Response
{

    public function SetStatusCode(int $code):void
    {
        http_response_code($code);
    }

    public function redirect(string $url):void
    {
        $baseUrl = "http://localhost:8080"; 
        header("Location: $baseUrl/$url");
        exit;
    }
}