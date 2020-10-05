<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;
use Yajra\DataTables\Facades\DataTables;

class ClientesController extends Controller
{
    
    public function index()
    {

        return view('clientes.index', [
            'clientes' => Clientes::latest()->paginate()
        ]);
    }

    public function datatable(){



        
        
        //  return DataTables::of(TablaProyectos::query())->make(true);
         return DataTables::of(Clientes::query())->editColumn('opciones',function(Clientes $cliente){
              $boton="<a href='/proyectos /".$cliente->id."'>Ver</a> - <a href='/proyectos/".$cliente->id."/editar'>Editar</a> - <a href='/proyectos/borrar/".$cliente->id."'>Borrar</a>";
              return $boton;
         })
         ->rawColumns(['opciones'])
         ->make(true);
  
      }

}
