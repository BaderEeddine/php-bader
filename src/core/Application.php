<?php

namespace app\core ;


class Application
{
    public Router $router;
    public Request $request;
    public View $view;
    public string $DIR;
    public static Application $app;

    public function __construct(string $dir)
    {
        self::$app = $this;
        $this->DIR = $dir;
        $this->view = new View();
        $this->router = new Router($this->view);                                                              
        $this->request = new Request();
        
        
    }

    public function run():void
    {
       $this->router->resolve($this->request);
    }

}

