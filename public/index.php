<?php

require_once dirname(__DIR__)."/vendor/autoload.php";

session_start();

use app\controller\AuthController;
use app\controller\HelloController;
use app\controller\AmhaController;
use app\core\Application;

$app = new Application(dirname(__DIR__));

 
$app->router->get("/registre", [AuthController::class,"registre"]);
$app->router->post("/registre", [AuthController::class,"registre"]);
$app->router->get("/login", [AuthController::class,"login"]);
$app->router->post("/login", [AuthController::class,"login"]);
$app->router->post("/logout", [AuthController::class,"logout"]);





$app->router->get("/", "home");

$app->run();

?>