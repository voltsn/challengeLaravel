<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\InvoiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clients', [ClientController::class, 'index']); 

Route::get('/clients/edit/{client:id}', [ClientController::class, 'edit']);

Route::patch('/clients/edit/{client:id}', [ClientController::class, 'update']);

Route::get('/invoices', [InvoiceController::class, 'index']);

Route::get('/invoices/edit/{invoice:id}', [InvoiceController::class, 'edit']);

Route::patch('/invoices/edit/{invoice:id}', [InvoiceController::class, 'update']);
