<?php

require_once dirname(__DIR__)."/vendor/autoload.php";

use app\core\Application;
use app\src\controller\helloController;

$app = new Application();

// echo dirname(__DIR__)."./vendor/autoload.php";

$app->router->get("/hello", "hello");

$app->router->get("/amha", [helloController::class,"index"]);

$app->router->get("/", "amha");

$app->run();

?>