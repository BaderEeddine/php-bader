<?php



require_once dirname(__DIR__)."/vendor/autoload.php";

use app\controller\HelloController;
use app\controller\AmhaController;
use app\core\Application;


$app = new Application();

 
$app->router->get("/hello", [HelloController::class,"index"]);

$app->router->get("/amha",[AmhaController::class,"index"] );

$app->router->get("/", "amha");

$app->run();

?>