<?php

namespace app\core ;

class Application
{
    public Router $router;
    public Request $request;
    public $path;
    public $method;

    public function __construct()
    {
        $this->router = new Router();                                                              
        $this->request = new Request(); 
        $this->path = $this->request->getPath();
        $this->method = $this->request->getMethod();

       
        // $this->view = $this->router->routes[$this->method][$this->path] ;

    }

    public function run():void
    {
       $this->render( $this->router->routes[$this->method][$this->path]);
    }

    public function render(string $view):void
    {
        require_once dirname(__DIR__)."/view/$view.php";
    }

}

