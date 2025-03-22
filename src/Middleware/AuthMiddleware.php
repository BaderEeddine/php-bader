<?php 

 namespace app\Middleware;

 use app\core\Middleware;
 use app\core\Response;

class AuthMiddleware implements Middleware
{
    public function handle($request,callable $next):Response
    {
         if (!$this->isAuthenticated()) {
            
            $response = new Response();
            $response->SetStatusCode(401);
            $response->redirect("login");
            return $response;
         }

         return $next($request);
    }

    private function isAuthenticated():bool
    {
        return isset($_SESSION["user"]);
    }
}