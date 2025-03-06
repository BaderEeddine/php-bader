<?php

require_once dirname(__DIR__)."/vendor/autoload.php";

use app\core\Application;


$app = new Application();

// echo dirname(__DIR__)."./vendor/autoload.php";

$app->router->get("/hello", "hello");
$app->router->get("/amha", "amha");

$app->run();

?>