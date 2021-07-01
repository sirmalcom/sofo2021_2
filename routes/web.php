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

Route::resource("tcargo","TCargoController");
Route::resource("tcategoria","TCategoriaController");
Route::resource("tcomprobante","TComprobanteController");
Route::resource("tdocumento","TDocumentoController");
Route::resource("mcliente","MClienteController");
Route::resource("mproducto","MProductoController");
Route::resource("mproveedor","MProveedorController");
Route::resource("musuarios","MUsuarioController");
Route::resource("mventa","MVentaController");
Route::resource("mentrada","MEntradaController");
Route::resource("dventa","DVentaController");
Route::resource("dentrada","DEntradaController");
