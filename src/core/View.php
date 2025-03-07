<?php

namespace app\core;

class View
{

    public Router $router;
    public Request $request;
    public Response $response;

    public function __construct(Router $router, Request $request)
    {
        $this->router = $router;
        $this->request = $request;
        $this->response = new Response();
    }

    public function render()
    {
 
        $view = $this->router->routes[$this->request->getMethod()][$this->request->getPath()]?? false;
         if(is_string($view))
         {
            require_once dirname(__DIR__)."/view/$view.php";
         }
         else if(!$view)
         {
            $this->response->responseCode(404);
            echo "not found";
         }
         else if(is_array($view))
         {
            // require_once dirname(__DIR__)."/src/controller/";
            
            $view[0]= new $view[0]();
            // echo call_user_func($view);
            // var_dump($view);
         }
         else{
            $view = call_user_func($view);
            require_once dirname(__DIR__)."/view/$view.php";
         }
    }
}