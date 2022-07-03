<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PessoasController;
use App\Models\pessoa;

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
    $pessoas = DB::table('pessoas')->get();
    return view('cadastro', ['pessoas' => $pessoas]);
});

Route::get('/pdf/{cpf}',[PdfController::class, 'index']);


Route::get('cadastro', function () {
    $pessoas = DB::table('pessoas')->get();
    return view('cadastro', ['pessoas' => $pessoas]);
});

Route::get('/cadastro-form', function () {
    return view('layout/form');
});

Route::post('cadastrar', [PessoasController::class, 'store']);

Route::post('editar', [PessoasController::class, 'store']);

Route::get('/cadastro-editar/{id}', function ($id) {
    $dadosCadastrados =  pessoa::where('id',$id)->get();
    return view('layout/form-editar', ['dadosCadastrados' => $dadosCadastrados]);
});


Route::resource('pessoa', PessoasController::class);

