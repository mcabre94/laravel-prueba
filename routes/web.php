<?php

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

use App\Empleado;

Route::get('/', function () {
    return view('welcome');
});


/*Route::get('/empleados', function () {
    $empleados = Empleado::all();
    dd($empleados);
});*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/empleados', 'EmpleadoController@index')->name('empleados.index');

Route::get('/empleados/create', 'EmpleadoController@create');

Route::post('/empleados/create', 'EmpleadoController@store')->name('empleados.store');

