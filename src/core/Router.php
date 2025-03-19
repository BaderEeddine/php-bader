<?php

namespace app\core;

class Router
{

    public array $routes = [];
    public Request $request;
    public View $view;


    public function __construct(Request $request, View $view)
    {
        $this->request = $request;
        $this->view = $view;
    }
    public function get(string $url, callable|array|string $callback): void
    {
        $this->routes['get'][$url] = $callback;
    }

    public function post(string $url, callable|array|string $callback): void
    {
        $this->routes['post'][$url] = $callback;
    }

    public function resolve(): void
    {
        $method = $this->request->getMethod();
        $path = $this->request->getPath();

        $callback = $this->routes[$method][$path] ?? false;
         
        if (!$callback) {
            Response::responseCode(404);
            $this->view->render('404', []); // Render a 404 view
            return; // Stop further execution
        }

        if (is_array($callback)) {

            $callback[0] = new $callback[0]($this->view, $this); // Instantiate the controller
            call_user_func($callback, $this->request); // Pass the request object
        }
        else if (is_string($callback)) {
            $this->view->render($callback, []); // Render the view
        }
        else {
            call_user_func( $callback,$this->request);
        }

    }

    public function redirect(string $url): void
    {
        $baseUrl = "http://localhost:8080"; 
        header("Location: $baseUrl/$url");
        exit; // Stop further execution
    }


}