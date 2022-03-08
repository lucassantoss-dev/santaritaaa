<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\SocioController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagamentoController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/quadras', [QuadraController::class, 'index']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/clientes', [ClienteController::class, 'index']);
    Route::post('/clientes', [ClienteController::class, 'store']);
    Route::put('/clientes/{id}', [ClienteController::class, 'update']);
    Route::delete('/clientes/{id}', [ClienteController::class, 'destroy']);
    Route::get('/clientes/{id}', [ClienteController::class, 'show']);
    Route::get('/clientes/search/{nome}', [ClienteController::class, 'search']);

    Route::get('/socios', [SocioController::class, 'index']);
    Route::post('/socios', [SocioController::class, 'store']);
    Route::put('/socios/{id}', [SocioController::class, 'update']);
    Route::delete('/socios/{id}', [SocioController::class, 'destroy']);
    Route::get('/socios/{id}', [SocioController::class, 'show']);
    Route::get('/socios/search/{nome}', [SocioController::class, 'search']);

    Route::get('/pagamentos', [PagamentoController::class, 'index']);
    Route::post('/pagamentos', [PagamentoController::class, 'store']);
    Route::put('/pagamentos/{id}', [PagamentoController::class, 'update']);
    Route::delete('/pagamentos/{id}', [PagamentoController::class, 'destroy']);
    Route::get('/pagamentos/{id}', [PagamentoController::class, 'show']);
    Route::get('/pagamentos/search/{nome}', [PagamentoController::class, 'search']);
});

Route::get('/quadras', [QuadraController::class, 'index']);
Route::post('/quadras/create', [QuadraController::class, 'store']);
Route::put('/quadras/update/{id}', [QuadraController::class, 'update']);
Route::delete('/quadras/delete/{id}', [QuadraController::class, 'destroy']);


Route::get('export-pdf/socio', [PDFController::class, 'socioPdf'])->name('export-pdf');
Route::get('export-pdf/cliente', [PDFController::class, 'clientePdf'])->name('cliente-pdf');
Route::get('export-pdf/pagamento', [PDFController::class, 'pagamentoPdf'])->name('pagamento-pdf');

URL::forceScheme('https');


