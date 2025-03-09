<?php

namespace app\core;

class View
{

    public function render($template ,$params = [])
    {

      extract($params);

      require_once dirname(__DIR__) ."/view/$template.php";

    }
}