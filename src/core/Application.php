<?php

namespace app\core ;


class Application
{
    public Router $router;
    public Request $request;
    public View $view;
    public static Application $app;
    public ?Controller $controller ;

    public function __construct()
    {
        self::$app = $this;
        $this->view = new View();
        $this->router = new Router($this->view);                                                              
        $this->request = new Request();
        $this->controller = new Controller();
        
    }

    public function run():void
    {
       $this->router->resolve($this->request);
    }

}

