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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('home');
})->name('homeadmin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/registroempleados', 'empleadosController@create')->name('guardarempleado');
Route::post('/almacenarempleados', 'empleadosController@store')->name('almacenarempleado');
/////////////afp
Route::get('/mostrarAfp', 'afpController@index')->name('mostrarAfp');
Route::get('/crearafp', 'afpController@create')->name('crearafp');
Route::post('/almacenarafp', 'afpController@store')->name('almacenarafp');
Route::get('/editAfp/{afp}', 'afpController@edit')->name('editAfp');
Route::put('updateafp/{afp?}', 'afpController@update')->name('updateAfp');
/////////////salud
Route::get('/mostrarSalud', 'saludController@index')->name('mostrarSalud');
Route::get('/crearSalud', 'saludController@create')->name('crearSalud');
Route::post('/almacenarSalud', 'saludController@store')->name('almacenarSalud');
Route::get('/editSalud/{salud}', 'saludController@edit')->name('editSalud');
Route::put('updateSalud/{salud?}', 'saludController@update')->name('updateSalud');
/////////////Cargo
Route::get('/mostrarCargo', 'cargoController@index')->name('mostrarCargo');
Route::get('/crearCargo', 'cargoController@create')->name('crearCargo');
Route::post('/almacenarCargo', 'cargoController@store')->name('almacenarCargo');
Route::get('/editCargo/{cargo}', 'cargoController@edit')->name('editCargo');
Route::put('updateCargo/{cargo?}', 'cargoController@update')->name('updateCargo');
/////////////Cargo
Route::get('/mostrarRazon', 'razonController@index')->name('mostrarRazon');
Route::get('/crearRazon', 'razonController@create')->name('crearRazon');
Route::post('/almacenarRazon', 'razonController@store')->name('almacenarRazon');
Route::get('/editRazon/{razon}', 'razonController@edit')->name('editRazon');
Route::put('updateRazon/{razon?}', 'razonController@update')->name('updateRazon');
/////////////Cargo
Route::get('/mostrarSucursal', 'sucursalController@index')->name('mostrarSucursal');
Route::get('/crearSucursal', 'sucursalController@create')->name('crearSucursal');
Route::post('/almacenarSucursal', 'sucursalController@store')->name('almacenarSucursal');
Route::get('/editSucursal/{sucursal}', 'sucursalController@edit')->name('editSucursal');
Route::put('updateSucursal/{sucursal?}', 'sucursalController@update')->name('updateSucursal');
/////////////CEmpleado
Route::get('detalleEmpleado/{empleado?}', 'empleadoController@show')->name('detalleEmpleado');
Route::get('editRazon', 'empleadoController@show2')->name('editRazon');
Route::get('/mostrarEmpleado', 'empleadoController@index')->name('mostrarEmpleado');
Route::get('/crearEmpleado', 'empleadoController@create')->name('crearEmpleado');
Route::post('/almacenarEmpleado', 'empleadoController@store')->name('almacenarEmpleado');
Route::get('/editEmpleado/{empleado}', 'empleadoController@edit')->name('editEmpleado');
Route::put('updateEmpleado/{empleado?}', 'empleadoController@update')->name('updateEmpleado');
Route::post('almacenarArticulosEmpleado', 'empleadoController@addart')->name('almacenarArticulosEmpleado');
