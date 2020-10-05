<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ejemplo extends Controller
{
    public function index(){

        $variable=[
            'uno'=>"Hola, esta es la página de ejemplo"
            
        ];
          //  return $variable;

          //las variables siempre hay que enviarlas con compact o con with
          return view('indexEjemplo',compact('variable'));
    }
}
