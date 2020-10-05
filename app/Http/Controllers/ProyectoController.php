<?php

namespace App\Http\Controllers;

use App\TablaProyectos;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

//use DB;


class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $portfolio=\DB  <--- si no importamos la clase DB
        // $portfolio=[
        //     ['title'=>'Proyecto#1'],
        //     ['title'=>'Proyecto#2'],
        //     ['title'=>'Proyecto#3'],
        //     ['title'=>'Proyecto#4']

        // ];

        //$portfolio = DB::table('tabla_proyectos')->get();
        //si hemos creado un modelo lo usamos en vez de esto
        // $portfolio=TablaProyectos::orderBy('created_at','DESC')->get();
        //a paginate() le pasamos por parámetros el número de elementos que queremos que muestre en cada página
        //por defecto son 15

        //  $portfolio=TablaProyectos::orderBy('created_at')->paginate();
        //latest()-> es lo mismo que orderBy('created_at'), por defecto latest coge la tabla created_at

        // return view('portfolio', compact('portfolio'));

        return view('proyectos.index', [
            'proyectos' => TablaProyectos::latest()->paginate()
        ]);
    }

    public function datatable(){



        
        
      //  return DataTables::of(TablaProyectos::query())->make(true);
       return DataTables::of(TablaProyectos::query())->editColumn('opciones',function(TablaProyectos $tabla){
            $boton="<a href='/proyectos/".$tabla->id."'>Ver</a> - <a href='/proyectos/".$tabla->id."/editar'>Editar</a> - <a href='/proyectos/borrar/".$tabla->id."'>Borrar</a>";
            return $boton;
       })
       ->rawColumns(['opciones'])
       ->make(true);

    }

    public function show($id)
    {
        //recibimos el parámetro que enviamos a través de la ruta
       // return $id;

       //Esto devolvería el objeto en un json, pero lo que queremos es mostrar un html, por lo tanto guardaremos lo que recibimos en una variable
      // return TablaProyectos::find($id);

      //findOrFail para que falle en el momento que no encuentre el id que le pasemos y no de error por traer un objeto null
      $proyecto=TablaProyectos::findOrFail($id);


      //de esta forma en la vista show ya tendremos acceso a la variable $proyecto
      return view('proyectos.show', [
          'proyecto'=>$proyecto
      ]);
    }

    public function create(){

        return view('proyectos.create');
    }

    public function store(){

        $titulo= request('titulo');
        $descripcion=request('descripcion');


        //validamos los campos para no tener errores
       $fields= request()->validate([
            'titulo'=>'required',
            'descripcion'=>'required'
        ]);

    //    TablaProyectos::create([
    //         'titulo'=>$titulo,
    //         'descripcion'=>$descripcion
    //     ]);


        //hace lo mismo que el método de arriba
        //TablaProyectos::create(request()->all());
        TablaProyectos::create($fields);

        //redireccionamos llamando al método route que recibe el nombre de la ruta como parámetro
        return redirect()->route('proyectos.index');
    }

    public function edit( TablaProyectos $proyecto){

        return view('proyectos.edit', [
            'proyecto'=>$proyecto
        ]);
    }

    public function borrar($id){
        $proyecto=TablaProyectos::findOrFail($id);

        return view('proyectos.borrar', [
            'proyecto'=>$proyecto
        ]);
    }

    public function update(TablaProyectos $proyecto){

        $fields= request()->validate([
            'titulo'=>'required',
            'descripcion'=>'required'
        ]);

       // return $proyecto;
       $proyecto->update([
           'titulo'=>$fields['titulo'],
           'descripcion'=>$fields['descripcion']
       ]);

       return redirect()->route('proyectos.show',$proyecto);
    }
    
    public static function destroy(TablaProyectos $proyecto){

        $proyecto->delete();

        return redirect()->route('proyectos.index');

    }
}
