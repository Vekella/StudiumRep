<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class LayoutController extends Controller{


    public function index(){
    
        return view('Layout.index');

    }
    public function kontakt(){

        return view('layout.kontakt');
    }

    public function fotke(){
   return view('Layout.fotke');

    }
}

?>