<?php

namespace app\core ;

class Application
{
    public Router $router;
    public Request $request;
    public View $view; 
    public $path;
    public $method;

    public function __construct()
    {
        $this->router = new Router();                                                              
        $this->request = new Request();
        $this->view = new View($this->router,$this->request); 
    }

    public function run():void
    {
       $this->view->render();
    }

}

