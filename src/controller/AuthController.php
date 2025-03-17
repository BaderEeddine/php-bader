<?php

namespace app\controller;

use app\core\Controller;
use app\core\Request;
use app\core\Validated;

class AuthController extends Controller
{
    
    public function registre(Request $request)
    {
        if($request->isPost())
        {
            $validate = $request->validate(
            ["name"=> ["required"],
                    "email" => ["required","email"],
                    "password"=>["required",["min",8]],
                    "confirm_password"=> ["required",["confirmed","password"]],
                    
                ]);
            
            if(!$request->isValid())
            {
                
                return $this->render('registre',["error" => $validate]);
            }
              
            //return $this->render('registre',["error" => $request->getBody()]);
        }
       return $this->render('registre');
    }

    public function login(Request $request)
    {
        $this->render("login");

    }
}