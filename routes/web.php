<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


//Enlazar con rutas

// Route::get('/', function () {
//     return "Esto es una prueba";
// });

// Route::get('/prueba', function () {
//     return "prueba dos";
// });

//Le paso parámetros a la función desde la ruta
// Route::get('saludo/{nombre}', function($nombre){
//     return "Saludos ".$nombre;
// });

//Para que no sea obligatorio pasar el parámetro y no de un error a la hora de no pasar nada
// Route::get('saludo/{nombre?}', function($nombre = "Invitado"){
//     return "Saludos ".$nombre;
// });

//RUTAS CON NOMBRE
//Para no tener que cambiar manualmente la url en todas las líneas donde aparezca

// Route ::get('contactame',function(){
//     return "Sección de contactos";
// })->name('contactos');

//En la raiz aparecerá lo siguiente y nos dirigirá con la función de arriba a /contactanos
// Route::get('/',function(){
//     echo "<a href='".route('contactos')."'>Contactos</a>";
// });

//Anteriormente solo devolvía una cadena de caracteres para "aprender" a usar las rutas con nombre
//lo ideal es devolver html o vistas, a continuación:

// Route::get('/',function(){
//     //las vistas se encuentran en resources/views
//     //no hace falta escribir la ruta completa, laravel ya asume donde está
//     //tampoco la extensión

//     //Enviar una variable/información a la vista
//     $nombre="Rosa";
//    // return view('home')->with('nombre',$nombre);
//    //en forma de array
//    //return view('home')->with(['nombre'=>$nombre]);
//     //pasar el array como segundo parámetro de la función view
//    // return view('home',['nombre'=>$nombre]);
//     //usar la función compact
//     //nos devolverá un array siempre y cuando tenga el mismo nombre de la variable
//     return view('home',compact('nombre'));
// })->name('home');


//Hacer lo mismo de arriba pero con menos líneas
//Si vamos a devolver una vista con poco contenido
//esta opción es la más adecuada
//páginas que no requieren mucha lógica

//Route::view('/','home',['nombre'=>'Rosa']);




Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::view('/contacto','contacto')->name('contacto');

// //Route::get('portfolio','PortfolioController')->name('portfolio');
// //cuando enruto hacia la vista portfolio le paso con la función compact el array que hemos definido antes
// //  Route::view('/portfolio','portfolio',compact('portfolio'))->name('portfolio');
//el primer parámetro, portfolio hace referencia al nombre de la ruta, no a la url, ponemos el mismo nombre al principio que después del name
//y después en el nav o donde lo referenciemos
 Route::get('/proyectos','ProyectoController@index')->name('proyectos.index');

 //index de cliente
Route::get('/clientes','ClientesController@index')->name('clientes.index');
Route::get('/clientes/datatable','ClientesController@datatable')->name('clientes.datatable');



 //** ES IMPORTANTE EL ORDEN DE LAS RUTAS**/
 //Enrutamos hacia la vista create, donde habrá un formulario
 Route::get('/proyectos/crear','ProyectoController@create')->name('proyectos.create');

 Route::get('/proyectos/{proyecto}/editar','ProyectoController@edit')->name('proyectos.edit');
 Route::patch('/proyectos/{proyecto}','ProyectoController@update')->name('proyectos.update');

 Route::post('/proyectos','ProyectoController@store')->name('proyectos.store');
 Route::get('/proyectos/datatable','ProyectoController@datatable')->name('proyectos.datatable');
 Route::get('/proyectos/{id}','ProyectoController@show')->name('proyectos.show');

 Route::get('/proyectos/borrar/{id}','ProyectoController@borrar')->name('proyectos.borrar');
 Route::delete('/proyectos/{proyecto}','ProyectoController@destroy')->name('proyectos.destroy');
 

// Route::delete('post/{proyecto}','ProyectoController@destroy')->name('proyecto.borrar');

//Para traer todos los métodos de Portfolio
//Route::resource('projects', 'PortfolioController');

//para el formulario hay que crear una ruta post
Route::post('contacto', 'formularioContacto@store');


//Simplemente para mostrar la vista
//Route::view('/ejemplo','ejemplo') ->name('ejemplo');
Route::get('/indexEjemplo','ejemplo@index')->name('indexEjemplo.index');