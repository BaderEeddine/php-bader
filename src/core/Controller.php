<?php 

namespace app\core;
require_once Application::$app->DIR."/bootstrap.php";


class Controller
{
    protected View $view;
    protected Router $router;

    public function __construct(View $view, Router $router)
    {
        $this->view = $view;
        $this->router = $router;
    }
    public function render(string $view, array $data = []): void
    {
        try {
            $this->view->render($view, $data);
        } catch (\Exception $e) {
            throw new \Exception("Failed to render view: {$view}. Error: " . $e->getMessage());
        }
    }
    public function redirect(string $url): void
    {
        try {
            $this->router->redirect($url);
        } catch (\Exception $e) {
            throw new \Exception("Failed to redirect to: {$url}. Error: " . $e->getMessage());
        }
    }
}