<?php 

namespace app\core;

class Controller
{
   
    public function render(string $view, array $data = [])
    {
       Application::$app->view->render($view,$data);

    }
}