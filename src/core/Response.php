<?php

namespace app\core;

class Response
{

    public static function responseCode(int $code)
    {
        http_response_code($code);
    }
}