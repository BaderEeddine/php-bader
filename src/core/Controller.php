<?php 

namespace app\core;
require_once Application::$app->DIR."/bootstrap.php";


class Controller
{
   
    public function render(string $view, array $data = [])
    {
       Application::$app->view->render($view,$data);

    }
}