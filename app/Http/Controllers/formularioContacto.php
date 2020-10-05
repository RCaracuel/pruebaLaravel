<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class formularioContacto extends Controller
{
    

    
  //Usando la clase Illuminate 
  // public function store(Request $request){

    //Sin usar la clase
    public function store(){
        
       // return $request;

       //Para acceder a un campo específico
      // return $request->get('nombre');

       //otra forma con la función request que nos devuelve una instancia de la clase illuminate http request

       return request('email');
       
    }
}
