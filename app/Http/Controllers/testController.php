<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    //code for function greeting()
    public function greeting(){
        dd("Salut tout le monde !");
    }
    //code for function information()
    public function information(){
        dd("Yo, je capte bien Laravel.");
    }
    //code for function today()
    public function today(){
        dd("Aujourd'hui, nous sommes vendredi.");
    }
    //code for function name()
    public function name(){
        dd("Mon nom est Jeff.");
    }
}
