<?php

namespace App\Http\Controllers;
use App\Http\Response;

/**
 * Description of HomeController
 *
 * @author camil
 */
class HomeController {
    
    public function index(){
        return new Response('home');
    }
}
