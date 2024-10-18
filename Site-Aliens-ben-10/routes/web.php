<?php

use App\Http\Controllers\TbWinxController;
use Illuminate\Support\Facades\Route;

//Para visualizar as páginas
Route::get('/',[TbWinxController::class,'MostrarHome'])->name('home-winx');
Route::get('/cadastro-winx',[TbWinxController::class,'MostrarCadastroWinx'])->name('show-cadastro-winx');
Route::get('/lista-winx',[TbWinxController::class,'MostrarWinxNome'])->name('lista-winx');
Route::get('/altera-winx/{id}',[TbWinxController::class,'MostrarWinxCodigo'])->name('show-altera-winx');

//para cadastrar
Route::post('/cadastro-winx',[TbWinxController::class, 'CadastrarWinx'])->name('cadastra-winx');

//Para deletar
Route::delete('/apaga-winx/{id}',[TbWinxController::class, 'Destroy'])->name('apaga-winx');

//para alterar
Route::put('/altera-winx/{id}',[TbWinxController::class, 'Update'])->name('altera-winx');
