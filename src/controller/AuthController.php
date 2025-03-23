<?php

namespace app\controller;


use app\Models\User;
use Osama\phpmvc\Request;
use Osama\phpmvc\Controller;

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

            $user = new User();
            $user->create([
                'name' => $request->getBody()['name'],
                'email' => $request->getBody()['email'],
                'password' =>password_hash($request->getBody()['password'],PASSWORD_DEFAULT) ,
            ]);
              
            $this->redirect('login');
        }

       return $this->render('registre');
    }

    public function login(Request $request)
    {
        if($request->isPost())
        {
            $validate = $request->validate([
                'email'=>['required','email'],
                'password'=>['required',['min',8]],                                
            ]);

            if(!$request->isValid())
            {
               return $this->render("login",["errors"=> $validate]);

            }

             $user = new User();
             $user = $user->where('email',$request->getBody()['email'])->first();
             
             if(!$user)
             {
                return $this->render("login",["error"=> "email not exiset"]);     
             }

             if(!password_verify($request->getBody()["password"], $user->password)){
                

                return $this->render("login",["error"=> "password invalid"]);     
                
             }
             $_SESSION['user'] = $user;
            $this->redirect('/');

        }
        $this->render("login");

    }

    public function logout()
    {
        if(isset( $_SESSION["user"])){
            unset( $_SESSION["user"]);

            $this->redirect('login');
        }
    }
}