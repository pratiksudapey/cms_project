<?php

use App\Http\Controllers\AdminController;
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


Route::get('/dashboard',[AdminController::class,'dashboard']);
// customer

Route::get('/add_customer',[AdminController::class,'add_customer']);
Route::get('/all_customer',[AdminController::class,'all_customer']);

Route::post('customer_add',[AdminController::class,'customer_add']);
Route::get('delete_customer/{id}',[AdminController::class,'delete_customer']);
Route::get('update_customer/{id}',[AdminController::class,'update_customer']);
Route::post('customer_update/{id}',[AdminController::class,'customer_update']);
// services


// transaction
Route::get('/transaction',[AdminController::class,'transaction']);
Route::post('/transaction_add',[AdminController::class,'transaction_add']);
Route::get('/all_transaction',[AdminController::class,'all_transaction']);

// dashboard

Route::get('dashboards',[AdminController::class,'dashboards']);

// services

Route::get('/services',[AdminController::class,'service']);
Route::post('/add_service',[AdminController::class,'add_service']);
Route::get('/all_services',[AdminController::class,'all_services']);

// sentSms
Route::get('sentSmS' ,[AdminController::class,'sentSmS']);
