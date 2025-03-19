<?php

namespace app\core ;


class Application
{
    public Router $router;
    public Request $request;
    public View $view;
    public string $DIR;
    public static Application $app;
    public Controller $controller;            
    public function __construct(string $dir)
    {
        self::$app = $this;
        $this->DIR = $dir;
        $this->view = new View();
        $this->request = new Request();
        $this->router = new Router($this->request,$this->view);   
        $this->controller = new Controller($this->view, $this->router)     ;                                                      
        
    }

    public function run():void
    {
        try {

            $this->router->resolve();
        }
        catch (\Exception $e) {
            echo "An error occurred: " . $e->getMessage();
        }
       
    }

}

