<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\ProdutoController;
//Route::get('/', function () {
//    return view('welcome');
//});

//Route::resource('vendas', VendaController::class);
Route::resource('clientes', ClienteController::class);

Route::get('/vendas',[VendaController::class, 'index'])->name('venda.index');
Route::get('/vendas/create',[VendaController::class, 'create'])->name('venda.create');
Route::post('/vendas',[VendaController::class, 'store'])->name('venda.store');

Route::get('/produtos/create',[ProdutoController::class, 'create'])->name('produto.create');
Route::post('/produtos',[ProdutoController::class, 'store'])->name('produto.store');
//Route::resource('produtos', ProdutoController::class);