<?php

namespace app\core;

class Router
{

    public  $routes = [];
    public Request $request;
    public View $view;


    public function __construct(View $view)
    {
        $this->view = $view;
    }
    public function get(string $url,$callback): void
    {
        $this->routes['get'][$url]= $callback;

    }

    public function post(string $url,$callback): void
    {
        $this->routes['post'][$url]= $callback;
    }

    public function resolve(Request $request): void
    {
        $this->request= $request;
        $method = $this->request->getMethod();
        $path = $this->request->getPath();

        $callback = $this->routes[$method][$path] ?? false;

        if (!$callback) {
            Response::responseCode(404);
            echo "page not found";
        }
        else if (is_array( $callback)) {

            $callback[0] = new $callback[0];
            call_user_func( $callback ,$this->request);

        } 
        else if(is_string($callback)){
            
          $this->view->render($callback,[]);
        }
        else {
            call_user_func( $callback,$this->request);
        }

    }


}