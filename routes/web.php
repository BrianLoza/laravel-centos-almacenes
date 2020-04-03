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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/GrupoAlmasen', function () {
//     return view('GrupoAlmasen');
// });

Route::get('/GrupoAlmasen', 'GrupoAlmasen@index');
Route::post('/GrupoAlmasen', 'GrupoAlmasen@IngresarGrupoAlamasen')->name('GrupoAlmasenForm');

Route::get('/ConfigMoneda', 'ConfigMonedaController@index');
Route::get('/eliminarAlmacen/{cod_grupo_almacen}', 'GrupoAlmasen@eliminarAlmacen');

// Route::get('/ConfigMoneda', function () {
//     return view('ConfigMoneda');
// });
