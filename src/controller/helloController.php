<?php 

namespace app\controller;

use app\core\Controller;

class HelloController extends Controller
{

    public function index()
    {
        $this->render('hello',['name'=>'oussama amha']);
        
    }
}