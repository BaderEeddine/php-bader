<?php

use Osama\phpmvc\Application;

require_once dirname(__DIR__)."/vendor/autoload.php";


session_start();

use app\controller\AuthController;
use app\Middleware\AuthMiddleware;


$app = new Application(dirname(__DIR__));

 
$app->router->get("/registre", [AuthController::class,"registre"]);
$app->router->post("/registre", [AuthController::class,"registre"]);
$app->router->get("/login", [AuthController::class,"login"]);
$app->router->post("/login", [AuthController::class,"login"]);
$app->router->post("/logout", [AuthController::class,"logout"])->add(new AuthMiddleware);

$app->router->get("/", "home")->add(new AuthMiddleware);

$app->run();

?>