<?php
use Illuminate\Support\Facades\Route;
use primerApp\Http\Controllers\Hex;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/ejemplos", function (){
    return "Todo funciona bien";
});

Route::get("/prueba", function (){
    return view("Ejemplo vistas.Prueba");
});
//ruta con switch
Route::get("/libros/{generos}", function ($genero){
    switch ($genero) {
        case "amor":
            return "Libros de Amor";
            break;
        case "terror":
            return "Libros de Terror";
            break;
    }
});
//ruta con switch
Route::get("/musica/{generos}", function ($genero){
    switch ($genero) {
        case "amor":
            return "Libros de Amor";
            break;
        case "terror":
            return "Libros de Terror";
            break;
    }
});

//con dos parametros
Route::get("/direccion/{calle}/{numero}", function($calle, $numero){
    return "La direccion es: " .$calle." No. ".$numero;
});

//comprobacion de valores
Route::get("/dir/{calle?}/{numero?}", function($calle="uno", $numero="1"){
    return "La calle es: ".$calle. " No. " .$numero;
}) ->where("calle","[a-zA-Z]+")->where("numero","[0-9]+"); 

//enlazar al controlador
Route::get("/inicio", "ejemploController@inicio");

//Enlazar controlador
Route::get("/Fin", "AutoController@Fin");

Route::get("/Blade", "bladecontroller@Blade");

Route::get("/Hex","Hex@Hex");

Route::get("/Login","Hex@Login");

Route::get("/Register","Hex@Register");

route::get("/contador","Hex@contador");