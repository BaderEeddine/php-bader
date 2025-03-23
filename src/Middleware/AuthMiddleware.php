<?php 
 namespace app\Middleware;
 use Osama\phpmvc\Middleware;
 use Osama\phpmvc\Response;
 

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